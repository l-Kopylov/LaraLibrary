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

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('product.edit', compact('product', 'tags', 'colors', 'categories'));
    }
}
