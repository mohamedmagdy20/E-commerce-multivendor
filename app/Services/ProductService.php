<?php

namespace App\Services;

use App\Models\Currency;
use App\Models\ProductStock;
use App\Traits\FilesTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductService
{
    use FilesTrait;
    public function handleProductPrice(Model $model, $product_id, $priceInUSD, $isUpdate = false)
    {
        $currencies = Currency::all();

        return DB::transaction(function () use ($model, $product_id, $priceInUSD, $currencies, $isUpdate) {
            if ($isUpdate) {
                $model->where('product_id', $product_id)->delete();
            }

            foreach ($currencies as $item) {
                $model->newInstance()->fill([
                    'product_id' => $product_id,
                    'currency_id' => $item->id,
                    'price' => ($priceInUSD * $item->price_in_dolar)
                ])->save();
            }
            return true;
        });
    }

    public function handleProductStock(Model $model, $product_id, array $data, $isUpdate = false)
    {
        return DB::transaction(function () use ($model, $product_id, $data, $isUpdate) {
            if ($isUpdate) {
                $existingStocks = $model->where('product_id', $product_id)->get();

                foreach ($data['size'] as $index => $itemGroup) {
                    foreach ($itemGroup as $itemIndex => $item) {
                        $color = $data['color'][$index];
                        $stock = $data['stock'][$index][$itemIndex];
                        $existing = $existingStocks->firstWhere([
                            'size' => $item,
                            'color' => $color
                        ]);

                        if ($existing) {
                            $existing->update(['stock' => $stock,'size'=>$item , 'color'=>$color]);
                        } else {
                            $model->newInstance()->fill([
                                'product_id' => $product_id,
                                'color' => $color,
                                'stock' => $stock,
                                'size' => $item
                            ])->save();
                        }
                    }
                }
            } else {
                // Original create logic
                foreach ($data['size'] as $index => $itemGroup) {
                    foreach ($itemGroup as $itemIndex => $item) {
                       $productStock = $model->newInstance()->fill([
                            'product_id' => $product_id,
                            'color' => $data['color'][$index],
                            'stock' => $data['stock'][$index][$itemIndex],
                            'size' => $item
                        ])->save();
                    }
                }
            }
            return true;
        });
    }


    public function handleProductImages(Model $model , $product_id , $data , $isUpdate = false)
    {
        return DB::transaction(function () use ($model, $product_id, $data, $isUpdate){
            $dataImage  = [];
            foreach($data['images'] as $index => $itemGroup)
            {
                foreach($itemGroup as $itemIndex => $item)
                {
                    $dataImage [] = $this->saveFile($item,config('filepath.PRODUCTS.PATH'));
                }
                $model->newInstance()->fill([
                    'color'=>$data['color'][$index],
                    'product_id'=>$product_id,
                    'images'=>$dataImage
                ])->save();
                $dataImage = [];
            }
            return true;
        });
    }
}
