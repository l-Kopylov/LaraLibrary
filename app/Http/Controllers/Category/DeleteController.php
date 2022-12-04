<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
