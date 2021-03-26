<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
    public function calcTol(Request $request)
    {
        $routeId = $request->get('rute');
        $routeList = DB::table('tolgate')->select(['id', 'rute'])->get();
        if ($routeId != null) {
            $routeData = DB::table('tolgate')->where('id', $routeId)->first();
            $routename = [
                'asal' => Str::substr($routeData->rute, 0, strpos($routeData->rute, ' -')),
                'tujuan' => Str::substr($routeData->rute, strpos($routeData->rute, ' - ') + 2, strlen($routeData->rute)),
            ];
        } else {
            $routeData = null;
            $routename = null;
        }
        return view("pages.calctol", ['routelist' => $routeList, 'routedata' => $routeData, 'routename' => $routename]);
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
