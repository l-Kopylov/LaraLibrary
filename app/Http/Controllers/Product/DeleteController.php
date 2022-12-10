<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DeleteController extends Controller
{
    public function __invoke(Product $color)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}

