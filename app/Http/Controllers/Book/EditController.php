<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Color;
use App\Models\Category;
use App\Models\Tag;
use App\Models\BookTag;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(Book $book)
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('book.edit', compact('book', 'tags', 'categories'));
    }
}
