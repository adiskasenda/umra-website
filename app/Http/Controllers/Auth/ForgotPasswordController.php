<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ForgotPasswordController extends Controller
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

    public function sendEmailResetPassword(Request $request)
    {

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/get_forgotpass/'.$request->email);
        $resetPassword = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $resetPassword['status'],
            'message' => $resetPassword['message'],
            'data' => $resetPassword['data'],
        ]);
    }

    public function validateOtp(Request $request)
    {
        $body = [
            "email" => $request->email,
            "otp" => $request->otp
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        // $this->header['Authorization'] = 'Bearer '.Session::get('token');
        
        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/validate_otp_email', $body);
        
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data'],
        ]);
    }

    public function updatePassword(Request $request)
    {
        $body = [
            "password_new" => $request->password_new,
            "password_confirm" => $request->password_confirm
        ];
        dd($body);
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_password/'.$request->user_id, $body);
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data'],
        ]);
    }
}
