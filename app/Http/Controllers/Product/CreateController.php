<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CreateController extends Controller
{
    public function __invoke(Product $Product)
    {
     return view('product.create');
    }
}
