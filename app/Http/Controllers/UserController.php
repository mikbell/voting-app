<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users/index', [
            'users' => User::query()
                ->withLastLogin()
                ->orderBy('name')
                ->simplePaginate(),
            'backUrl' => url()->previous() !== url()->full()
                ? url()->previous() : route('idea.index')
        ]);
    }
}
