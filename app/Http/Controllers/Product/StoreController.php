<?php

namespace App\Http\Controllers\Product;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(Product $product)
    {
        $data = $request->validated();
        Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
