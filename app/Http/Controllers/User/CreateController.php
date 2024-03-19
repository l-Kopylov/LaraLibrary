<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class CreateController extends Controller
{
    public function __invoke()
    {
        if (Gate::denies('access-route')) {
            abort(403);
        }

        return view('user.create');
    }
}
