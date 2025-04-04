<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Vendor\StoreRequest;
use App\Http\Requests\Backend\Vendor\UpdateRequest;
use App\Models\Vendor;
use App\Traits\FilesTrait;
use Exception;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    use FilesTrait;
    protected $model;
    protected $path = 'back.vendor.';
    protected $routePath = 'vendors.';
    public function __construct(Vendor $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view($this->path.'index',['data'=>$this->model->latest()->get()]);
    }

    public function create()
    {
        return view($this->path.'create');
    }
    public function edit($id)
    {
        return view($this->path.'edit',['data'=>$this->model->findOrFail($id)]);
    }

    public function store(StoreRequest $request)
    {
        try{
            $data = $request->validated();
            if($request->file('img'))
            {
                $data['img'] = $this->saveFile($request->file('img'),config('filepath.VENDORS.PATH'));
            }
            $this->model->create($data);
            return redirect()->route($this->routePath.'index')->with('success','Data Saved');    
        }catch(Exception $e)
        {
            return $e->getMessage();
        } 
    }
    public function update(UpdateRequest $request,$id)
    {
        $data = $request->validated();
        $user = $this->model->findOrFail($id);
        if($request->file('img'))
        {
            $data['img'] = $this->updateFile($request->img , $data['img'] , config('filepath.VENDORS.PATH'));
        }
        $user->update($data);
        return redirect()->route($this->routePath.'index')->with('success','Data Updated');    
    }

    public function delete($id)
    {
       $data =  $this->model->findOrFail($id);
       if($data->img != null)
       {
            $this->deleteFile($data->img,config('filepath.VENDORS.PATH'));
       }
        return redirect()->route($this->routePath.'index')->with('success','Data Deleted');    
    }
}