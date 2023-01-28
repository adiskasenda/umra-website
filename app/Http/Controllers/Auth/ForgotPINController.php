<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ForgotPINController extends Controller
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

    public function resetPIN()
    {
        return ;
    }

    public function updatePIN()
    {
        $body = [
            "pin_new" => $request->pin_new,
            "pin_confirm" => $request->pin_confirm
        ];
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_pin/'.$id, $body);
        $customer = json_decode($response->getBody(), true);
        
        return redirect()->back();
    }
}
