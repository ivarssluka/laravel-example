<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(): View|Factory|Application
    {
        return view('auth.register');
    }

    public function store()
    {
        dd(request()->all());
    }
}
