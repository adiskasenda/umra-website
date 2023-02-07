<?php

namespace App\Http\Controllers\PIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class PINController extends Controller
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

    public function validateOtp(Request $request)
    {
        $body = [
            "pin" => $request->pin
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/validate_pin', $body);
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function sendEmail(Request $request)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/get_forgotpin/'.$request->email);
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function validateOtpEmail(Request $request)
    {
        $body = [
            "email" => $request->email,
            "otp" => $request->otp
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/validate_otp_email', $body);
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }
}
