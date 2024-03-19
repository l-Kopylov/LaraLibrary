<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Gate;


class DeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
        if (Gate::denies('access-route')) {
            abort(403);
        }
        $tag->delete();

        return redirect()->route('tag.index');
    }
}

