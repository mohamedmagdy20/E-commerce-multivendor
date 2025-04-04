<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\StoreRequest;
use App\Models\Product;
use App\Services\TranslationService;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FilesTrait;
    protected $model;
    protected $path = 'back.products.';
    protected $routePath = 'products.';
    protected $translationService;
    public function __construct(Product $model , TranslationService $translationService)
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
        return $request->all();
    }

}
