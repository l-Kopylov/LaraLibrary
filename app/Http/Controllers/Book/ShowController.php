<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use App\Models\BookTag;
use Illuminate\Support\Facades\Storage;


class ShowController extends Controller
{
    public function __invoke(Book $book, Category $categories)
    {
     return view('book.show', compact('book'));
    }
}
