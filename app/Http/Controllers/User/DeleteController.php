<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;


class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        if (Gate::denies('access-route')) {
            abort(403);
        }

        $user->delete();

        return redirect()->route('user.index');
    }
}

