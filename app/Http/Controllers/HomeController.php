<?php

namespace App\Http\Controllers;

use App\Models\Gate;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mapper;
use App\Models\TarifTols;
use App\Models\TarifKotas;
use App\Models\User;

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
        $ingate = Tarif::select(['id', 'masuk'])->groupBy('masuk')->with('ingate')->get();
        $outgate = [];
        if ($inName != null && $outName != null) {
            $routeData = Tarif::where([['masuk', $inName], ['keluar', $outName],])->with('ingate', 'outgate')->first();
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

    
    public function edit($id)
    {                
        $profile = User::findorfail($id);
        return view('pages.updateProfile', compact('profile')); 
    }

    public function update(Request $request, $id)
    {
        $profile = User::findorfail($id);
        $profile->update([
            'fullname' => $request->fullname,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'email' => $request->email
        ]);
        return redirect('profile')->with('toast_succes', 'Profile Berhasil Di Update');
    }

    function showContactForm()
    {
        Mapper::map(106.890944, -6.142827);
        return view('pages.contact');
    }

    function sendMail(Request $request)
    {

        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');


        $mail = new PHPMailer(true);
        try {

            // Pengaturan Server                              
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'aurorazhra30@gmail.com';
            $mail->Password = 'auroradani';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('aurorazhra30@gmail.com', 'Aurora Dani');


            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();
            Mapper::map(106.890944, -6.142827);
            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('pages.contact');
        } catch (Exception $e) {
            Mapper::map(106.890944, -6.142827);
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

    public function gerbangKeluar($id)
    {
        if ($id === "null") {
            return '<option selected value="null">Pilih tol masuk terlebih dahulu</option>';
        }
        $outGate = Tarif::select(['id', 'keluar'])->where('masuk', $id)->with('outgate')->get();
        $outSelect = '';
        foreach ($outGate as $key => $value) {
            $outSelect .= '<option value=' . $value->keluar . '>' . $value->outgate[0]->nama_gerbang . '</option>';
        }
        return $outSelect;
    }

    public function hargaTol()
    {
        $tols = TarifTols::paginate(7);
        $kotas = TarifKotas::pluck('nama_kota', 'id_kota');
        return view('pages.harga', compact('tols', 'kotas'));
    }

    public function kotaAjax($id)
    {
        if ($id == 0) {
            $tols = TarifTols::all();
        } else {
            $tols = TarifTols::where('id_kota', '=', $id)->get();
        }
        return $tols;
    }
}
