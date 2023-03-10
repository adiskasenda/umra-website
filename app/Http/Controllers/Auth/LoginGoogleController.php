<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
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
    
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $google = Socialite::driver('google')->user();

        $body = [
            "email" => $google->user['email'],
            "device" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36",
            "ip_address" => "139.192.213.113",
            "token_fcm" => $google->id,
            "name" => $google->user['name'],
            "photo" => $google->user['picture'],
            "referer_uuid" => ""
        ];

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/auth_google', $body);
        $login = json_decode($response->getBody(), true);
        
        if ( $login['status'] == '2' ) {
            $input['type'] = 'gmail';
            return redirect(url('/login'))
                            ->withInput($input)
                            ->with('error', $login['message']);
        }

        Session::put([
            'token' => $login['data']['token'] ,
            'user' => $login['data']['user']
        ]);

        return redirect(url('/'));
    }
}
