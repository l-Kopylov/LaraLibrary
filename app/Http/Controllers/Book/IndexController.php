<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\BookTag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
   public function __invoke()
   {
    $tags = Tag::all();
    $books = Book::all();
    $user = Auth::user();
    $bookUs = Book::with('autor')->get();
    
    return view('book.index', compact('books', 'tags', 'user', 'bookUs'));
   }

}
