<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }
    public function calcTol()
    {
        return view("pages.calctol");
    }
    public function newsTol()
    {
        return view("pages.newstol");
    }
    public function loadNews($id)
    {
        return view("pages.viewnews", ["id" => $id]);
    }
    public function profile()
    {
        return view("pages.profile");
    }
}
