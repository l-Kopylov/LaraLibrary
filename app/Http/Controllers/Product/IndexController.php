<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Category;
use App\Models\Tag;
use App\Models\ProductTag;
use App\Models\ColorProduct;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
   public function __invoke()
   {
    $products = Product::all();
    return view('product.index', compact('products'));
   }
}
