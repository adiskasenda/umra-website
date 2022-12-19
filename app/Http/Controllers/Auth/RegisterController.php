<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
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
        return view('pages.authentication.register');
    }

    public function registerEmail(Request $request)
    {
        $body = [
            "email" => "hanifalbaaits@dataku.id",
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113",
            "token_fcm" => NULL,
            "password" => "12345",
            "referer_uuid" => "",
            "gateway_registered" => "1",
            "title" => "Bapak",
            "firstname" => "Hanif",
            "lastname" => "Al Baaits",
            "birthday" => "2025-11-08"
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/register', $body);
        $register = json_decode($response->getBody(), true);

        if ( $register['status'] == '2' ) {
            return redirect()->back()
                            ->withInput($request->input())
                            ->with('error', $register['message']);
        }

        Session::put([
            'token' => $register['data']['token'] ,
            'user' => $register['data']['user']
        ]);

        return redirect(url('/'));
    }

    public function registerPhone(Request $request)
    {
        $body = [
            "device" => $_SERVER['HTTP_USER_AGENT'],
            "ip_address" => "139.192.213.113",
            "token_fcm" => NULL,
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "birthday" => date('Y-m-d', strtotime($request->birthday)),
            "phone" => $request->phone
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/register-phone', $body);
        $register = json_decode($response->getBody(), true);

        if ( $register['status'] == '2' ) {
            $input = $request->input();
            $input['type'] = 'phone';

            return redirect()->back()
                        ->withInput($input)
                        ->with('error', $register['message']);
        }

        Session::put([
            'token' => $register['data']['token'] ,
            'user' => $register['data']['user']
        ]);

        return redirect(url('/'));
    }
    
}
