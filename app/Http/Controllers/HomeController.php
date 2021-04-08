<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
    function showContactForm(){
        return view('pages.contact');
    }

    function sendMail(Request $request){
        
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
            $mail->Username = 'acmilrizqy17@gmail.com';                 
            $mail->Password = 'rizqyghaniyyu1987';                           
            $mail->SMTPSecure = 'ssl';                           
            $mail->Port = 465;                                    

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('acmilrizqy17@gmail.com', 'Rizqy Fadhilah');    
                       

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('pages.contact');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
