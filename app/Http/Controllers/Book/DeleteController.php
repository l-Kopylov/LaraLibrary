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


class DeleteController extends Controller
{
    public function __invoke(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index');
    }
}

