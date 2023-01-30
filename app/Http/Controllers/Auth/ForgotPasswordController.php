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
}
