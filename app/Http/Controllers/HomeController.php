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
        $inName = $request->get('ingate');
        $outName = $request->get('outgate');
        $ingate = DB::table('tarif')->select(['masuk'])->groupBy('masuk')->get();
        $outgate = DB::table('tarif')->select(['keluar'])->groupByRaw('keluar')->get();
        if ($inName != null && $outName != null) {
            $routeData = DB::table('tarif')->where([['masuk', $inName], ['keluar', $outName],])->first();
        } else {
            $routeData = null;
            $routename = null;
        }
        return view("pages.calctol", ['ingate' => $ingate, 'outgate' => $outgate, 'routedata' => $routeData]);
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
