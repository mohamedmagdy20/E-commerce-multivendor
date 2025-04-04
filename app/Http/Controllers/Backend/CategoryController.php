<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Categories\StoreRequest;
use App\Http\Requests\Backend\Categories\UpdateRequest;
use App\Models\Category;
use App\Services\TranslationService;
use App\Traits\FilesTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    use FilesTrait;
    protected $model;
    protected $path = 'back.categories.';
    protected $routePath = 'categories.';
    protected $translationService;
    public function __construct(Category $model , TranslationService $translationService)
    {
        $this->model = $model;
        $this->translationService = $translationService;
    }

    public function index()
    {
        $data = $this->model->latest()->get();
        return view($this->path.'index',['data'=>$this->model->latest()->get()]);
    }

    public function create()
    {
        $record = $this->model;
        $notParents = $this->model->isParent()->get();
        
        return view('back.categories.create',['record'=>$record,'notParents'=>$notParents]);
    }
    public function edit($id)
    {
        
        $notParents = $this->model->isParent()->get();
        return view('back.categories.edit',['notParents'=>$notParents,'record'=>$this->model->findOrFail($id)]);
    }

    public function store(StoreRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            if($request->file('image'))
            {
                $data['image'] = $this->saveFile($request->file('image'),config('filepath.CATEGORY.PATH'));
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
            $category = $this->model->findOrFail($id);
            if($request->file('image'))
            {
                $data['image'] = $this->updateFile($request->file('image'),$category->image,config('filepath.CATEGORY.PATH'));
            }
            $category->update($data);
            $this->translationService->processTranslations($category ,$data ,['ar','en']);
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
             $this->deleteFile($data->image,config('filepath.CATEGORY.PATH'));
        }
        $data->delete();
        return redirect()->route($this->routePath.'index')->with('success','Data Deleted');    
    
    }

}
