<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function login(): View
    {
        $pageName = "login";
        return view("front.login", compact("pageName"));
    }

    public function profile(): View
    {
        $pageName = "profile";
        return view("front.profile", compact("pageName"));
    }

    public function book(): View
    {
        $pageName = "book";
        return view("front.book", compact("pageName"));
    }
}
