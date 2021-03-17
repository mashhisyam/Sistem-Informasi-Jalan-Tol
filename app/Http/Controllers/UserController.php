<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Login
    public function index()
    {
        return view("pages.login");
    }
}
