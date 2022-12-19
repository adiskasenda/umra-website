<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    private $header;
    private $url;

    public function __construct()
    {
        $this->header = [
            'ax-request-id' => Uuid::uuid4()->toString(),
            'ax-request-at' => Carbon::now()->toIso8601String(),
            'ax-channel-in' => 'UMRA-WEB',
            'ax-request-by' => ''
        ];

        $this->url = env('APP_URL_API');
    }

    public function index()
    {
        return view('pages.authentication.login');
    }

    // Login With Email
    public function loginEmail(Request $request)
    {
        $body = [
            "email" => $request->email,
            "password" => $request->password,
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113"
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/auth', $body);
        $login = json_decode($response->getBody(), true);


        if ( $login['status'] == '2' ) {
            $input = $request->input();
            $input['type'] = 'email';
            return redirect()->back()
                            ->withInput($input)
                            ->with('error', $login['message']);
        }

        Session::put([
            'token' => $login['data']['token'] ,
            'user' => $login['data']['user']
        ]);

        return redirect(url('/'));
    }

    // Login With Phone
    public function loginPhone(Request $request)
    {
        $body = [
            "phone"  => $request->phone,
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113",
            "token_fcm" => NULL
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/auth_phone', $body);
        $login = json_decode($response->getBody(), true);

        if ( $login['status'] == '2' ) {
            $input = $request->input();
            $input['type'] = 'phone';
            return redirect()->back()
                            ->withInput($input)
                            ->with('error', $login['message']);
        }

        return redirect(url('/login-phone/validate-otp?phone='. $request->phone));
    }

    public function viewOtp(Request $request)
    {
        return view('pages.authentication.otp');
    }

    public function checkOtp(Request $request)
    {
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/check_otp/'.$request->phone);
        $banners = json_decode($response->getBody(), true);

        return redirect()->back();
    }

    public function loginOtp(Request $request)
    {
        $body = [
            "phone"  => $request->phone,
            "otp" => $request->otp
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/validate_otp_phone', $body);
        $login = json_decode($response->getBody(), true);

        Session::put([
            'token' => $login['data']['token'] ,
            'user' => $login['data']['user']
        ]);

        return redirect(url('/'));
    }

    // Login With Google
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        
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
        Session::flush();

        return redirect()->back();
    }

}
