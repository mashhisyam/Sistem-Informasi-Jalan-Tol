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
        if ($id == 1) {
            return view("pages.viewnews.viewnews1", ["id" => $id]);
        } else if ($id == 2) {
            return view("pages.viewnews.viewnews2", ["id" => $id]);
        } else {
            return view("pages.home");
        }


        return view("pages.viewnews.viewnews3", ["id" => $id == 3]);
        return view("pages.viewnews.viewnews4", ["id" => $id == 4]);
    }
    public function profile()
    {
        return view("pages.profile");
    }
    public function contact(){
        return view("pages.contact");
    }
}
