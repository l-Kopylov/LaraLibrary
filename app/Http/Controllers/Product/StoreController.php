<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Color;
use App\Models\Tag;
use App\Models\ProductTag;
use App\Models\ColorProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // dd($data);
        
        $data['prewiev_image'] = Storage::disk('public')->put('/images', $data['prewiev_image']);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ], $data);

        foreach($tagsIds as $tagsId){
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id'     => $tagsId
            ]);
        }

        foreach($colorsIds as $colorsId){
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id'   => $colorsId
            ]);
        }

        return redirect()->route('product.index');
    }
}
