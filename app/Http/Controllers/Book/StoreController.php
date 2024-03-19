<?php

namespace App\Http\Controllers\Book;


use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreRequest;
use App\Models\Color;
use App\Models\Tag;
use App\Models\BookTag;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

     
        
        // $data['prewiev_image'] = Storage::disk('public')->put('/images', $data['prewiev_image']);

        $tagsIds = $data['tags'];
        unset($data['tags']);

        $book = Book::firstOrCreate([
            'title' => $data['title']
        ], $data);

        foreach($tagsIds as $tagsId){
            BookTag::firstOrCreate([
                'book_id' => $book->id,
                'tag_id'     => $tagsId
            ]);
        }



        return redirect()->route('book.index');
    }
}
