<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\StoreRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductPrice;
use App\Models\ProductStock;
use App\Models\Size;
use App\Models\Vendor;
use App\Services\ProductService;
use App\Services\TranslationService;
use App\Traits\FilesTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    use FilesTrait;
    protected $model;
    protected $path = 'back.products.';
    protected $routePath = 'products.';
    protected $translationService;
    protected $categories;
    protected $brands;
    protected $vendors;
    protected $productPrice ;
    protected $productStock;
    protected $productImages;

    protected $productService;
    public function __construct(
        Product $model,
        TranslationService $translationService,
        Category $category,
        Brand $brands ,
        Vendor $vendors,
        ProductPrice $productPrice ,
        ProductStock $productStock ,
        ProductImage $productImages,
        ProductService $productService
    )
    {
        $this->model = $model;
        $this->translationService = $translationService;
        $this->categories = $category;
        $this->brands = $brands;
        $this->vendors = $vendors;
        $this->productPrice = $productPrice;
        $this->productStock = $productStock;
        $this->productImages = $productImages;
        $this->productService = $productService;
    }

    public function index()
    {
        return view($this->path.'index',['data'=>$this->model->latest()->get()]);
    }

    public function create()
    {
        $record = $this->model;     
        $categories = $this->categories->get();
        $brands = $this->brands->get();
        $vendors = $this->vendors->get();
        $sizes = Size::all();
        return view($this->path.'create',['record'=>$record,'sizes'=>$sizes,'categories'=>$categories , 'brands'=>$brands,'vendors'=>$vendors]);
    }

    public function edit($id)
    {   
        return view($this->path.'edit',['record'=>$this->model->findOrFail($id)]);
    }

    public function store(StoreRequest $request)
    { 
        try{
        DB::beginTransaction();
            $data = $request->all();
            if($request->hasFile('image'))
            {
               $data['image'] = $this->saveFile($request->image , config('filepath.PRODUCTS.PATH'));
            }    
            $product = $this->model->create($data);
            $product->categories()->sync($data['category_id']);
            $this->translationService->processTranslations($product ,$data ,['ar','en']);
            $this->productService->handleProductPrice($this->productPrice ,$product->id , $data['price']);
            $this->productService->handleProductStock($this->productStock , $product->id , $data);
            $this->productService->handleProductImages($this->productImages , $product->id , $data);
            DB::commit();
            return redirect()->route('products.index')->with('success','Product Saved');
        }catch(Exception $e)
        {
            DB::rollBack();
            return $e->getMessage();
        }
        
    }
}
