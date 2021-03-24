<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $newsDatas = DB::table("news")->get("*");
        return view("pages.newstol", ["newsDatas" => $newsDatas]);
    }
    public function loadNews($id)
    {
        $newsdata = DB::table('news')->where('id', $id)->first("*");
        $reletedNews = DB::table('news')->select("*")->whereNotIn('id', [$id])->inRandomOrder()->limit(2)->get();
        return view("pages.viewnews", ["newsdata" => $newsdata, "releted" => $reletedNews]);
    }
    public function profile()
    {
        return view("pages.profile", ['profile' => Auth()->user()]);
    }
    public function contact()
    {
        return view("pages.contact");
    }
}
