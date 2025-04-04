<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Currency\StoreRequest;
use App\Http\Requests\Backend\Currency\UpdateRequest;
use App\Models\Currency;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    protected $model;
    protected $path = 'back.currency.';
    protected $routePath = 'currency.';
    protected $translationService;
    public function __construct(Currency $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        return view($this->path.'index',['data'=>$this->model->latest()->get()]);
    }

    public function update(Request $request)
    {
        $data = $this->model->findOrFail($request->id);
        $data->update([
            'price_in_dolar'=>$request->value
        ]);
        return response()->json(['success' => true, 'message' => 'Currency updated successfully']);
    }
}
