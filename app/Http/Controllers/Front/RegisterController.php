<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\RegisterRequest;
use App\Jobs\EmailVirificationJob;
use App\Jobs\UserRegisterNotification;
use App\Models\User;
use App\Traits\FilesTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use FilesTrait;
    protected $model ;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('front.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            if($request->hasFile('image'))
            {
               $data['image'] = $this->saveFile($request->image,config('filepath.USERS_PATH'));
            }
            $data['remember_token'] = $this->generateOtp();
            $user = $this->model->create($data);
            dispatch(new EmailVirificationJob($user->email , $data['remember_token']));
            DB::commit();
            return redirect()->route('account.verify.view')->with('success','Register Success');
        }catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back()->with('error',$e->getMessage());
        }
   
    }
    public function virefyView(){
        return view('front.auth.virefiy');
    }
    public function virefyAccount(Request $request)
    {
        $user = $this->model->where('remember_token',$request->otp)->first();
        $user->update(['email_verified_at'=>Carbon::now(),'remember_token'=>null]);
        dispatch(new UserRegisterNotification($user));
        return redirect()->route('login.view')->with('success','Account Virefiy');
    }

    private function generateOtp()
    {
        $otp =  rand ( 10000 , 99999 );
        return $otp;
    }
}
