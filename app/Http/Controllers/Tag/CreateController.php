<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(Tag $tag)
    {
     return view('tag.create');
    }
}
