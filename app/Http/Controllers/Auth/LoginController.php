<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class LoginController extends Controller
{

    private $header;
    private $url;

    public function __construct()
    {
        $this->header = [
            'ax-request-id' => Uuid::uuid4()->toString(),
            'ax-request-at' => Carbon::now()->toIso8601String(),
            'ax-channel-in' => 'UMRA-WEB'
        ];

        $this->url = env('APP_URL_API');
    }

    public function index()
    {
        return view('pages.authentication.login');
    }

    // Login With Email
    public function loginEmail()
    {
        $body = [
            "email" => $request->email,
            "password" => $request->password,
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113"
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/employee/auth', $body);
        $login = json_decode($response->getBody(), true);

        if ( $login['status'] == '2' ) {
            return redirect()->back()
                            ->withInput($request->input())
                            ->with('error', $login['message']);
        }

        Session::put([
            'token' => $login['data']['token'] ,
            'user' => $login['data']['user']
        ]);

        return redirect(url('/'));
    }

    public function viewEmailOtp()
    {
        return view('pages.authentication.otp');
    }

    public function loginEmailOtp()
    {
        $body = [
            "email" => "hanifalbaaits@gmail.com",
            "otp" => "203063"
        ];

        return redirect(url('/'));
    }

    // Login With Phone
    public function loginPhone()
    {
        $body = [
            "phone"  => "62811831891",
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113",
            "token_fcm" => NULL
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/employee/auth', $body);
        $login = json_decode($response->getBody(), true);

        if ( $login['status'] == '2' ) {
            return redirect()->back()
                            ->withInput($request->input())
                            ->with('error', $login['message']);
        }

        Session::put([
            'token' => $login['data']['token'] ,
            'user' => $login['data']['user']
        ]);

        return redirect(url('/'));
    }

    public function viewPhoneOtp()
    {
        return view('pages.authentication.otp');
    }

    public function loginPhoneOtp()
    {
        $body = [
            "phone"  => "62859106594692",
            "otp" => "203063"
        ];

        return redirect(url('/'));
    }

    // Login With Gmail Google
    public function gmail()
    {
        $body = [
            "email" => "hanifalbaaits@gmail.com",
            "device" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36",
            "ip_address" => "139.192.213.113",
            "token_fcm" => NULL,
            "name" => "Hanif Al Baaits",
            "photo" => "https://lh3.googleusercontent.com/ogw/AOh-ky3vaFnbRZXR6BUQ06w5D6_UCD-hcsZWzOsSbA2img=s64-c-mo",
            "referer_uuid" => ""
        ];

        return redirect(url('/'));
    }

    public function logout()
    {
        return redirect()->back();
    }

}
