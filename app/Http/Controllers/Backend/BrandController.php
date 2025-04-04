<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brand\StoreRequest;
use App\Http\Requests\Backend\Categories\UpdateRequest;
use App\Models\Brand;
use App\Services\TranslationService;
use App\Traits\FilesTrait;
use Exception;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    use FilesTrait;
    protected $model;
    protected $path = 'back.brands.';
    protected $routePath = 'brands.';
    protected $translationService;
    public function __construct(Brand $model , TranslationService $translationService)
    {
        $this->model = $model;
        $this->translationService = $translationService;
    }
    public function index()
    {
        return view($this->path.'index',['data'=>$this->model->latest()->get()]);
    }

    public function create()
    {
        $record = $this->model;
        return view($this->path.'create',['record'=>$record]);
    }
    public function edit($id)
    {
        return view($this->path.'edit',['record'=>$this->model->findOrFail($id)]);
    }
    public function store(StoreRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            if($request->file('image'))
            {
                $data['image'] = $this->saveFile($request->file('image'),config('filepath.BRAND.PATH'));
            }
            $model = $this->model->create($data);
            $this->translationService->processTranslations($model ,$data ,['ar','en']);
            DB::commit();
            return redirect()->route($this->routePath.'index')->with('success','Data Saved');    
        }catch(Exception $e)
        {
            DB::rollBack();
            return $e->getMessage();
        } 
    }
    public function update(UpdateRequest $request,$id)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            $brand = $this->model->findOrFail($id);
            if($request->file('image'))
            {
                $data['image'] = $this->updateFile($request->file('image'),$brand->image,config('filepath.BRAND.PATH'));
            }
            $brand->update($data);
            $this->translationService->processTranslations($brand ,$data ,['ar','en']);
            DB::commit();
            return redirect()->route($this->routePath.'index')->with('success','Data Update');    
        }catch(Exception $e)
        {
            DB::rollBack();
            return $e->getMessage();
        } 
    }

    public function delete($id)
    {
        $data =  $this->model->findOrFail($id);
        if($data->image != null)
        {
             $this->deleteFile($data->image,config('filepath.BRAND.PATH'));
        }
        $data->delete();
        return redirect()->route($this->routePath.'index')->with('success','Data Deleted');    
    } 
}