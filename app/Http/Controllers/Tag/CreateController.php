<?php

namespace App\Http\Controllers\Tag;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(Tag $tag)
    {
        if (Gate::denies('access-route')) {
            abort(403);
        }
        return view('tag.create');
    }
}
