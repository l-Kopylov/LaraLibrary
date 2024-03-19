<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Tag;
use App\Models\BookTag;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Book\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $book->update($data);

        return view('book.show', compact('book'));
    }
}
