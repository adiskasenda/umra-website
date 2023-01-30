<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedBackController extends Controller
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

    public function emailVerification(Request $request)
    {
        if ( empty($request->status) ) {
            return redirect('/');
        }

        return view('pages.feedBack.emailVerification', [
            'status' => $request->status,
            'sendretry' => $request->sendretry
        ]);
    }

    public function resetPassoword()
    {
        return view('pages.feedBack.resetPassword');
    }

    public function updatePassword()
    {
        $body = [
            "password_new" => $request->password_new,
            "password_confirm" => $request->password_confirm
        ];

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_password/'.$id, $body);
        $customer = json_decode($response->getBody(), true);

        return redirect('/login');
    }
    
}
