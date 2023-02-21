<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class TransactionPaymentController extends Controller
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

    public function paymentNeedPay($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Order
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/'.$id);
        $order = json_decode($response->getBody(), true);

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        return view('pages.transaction.paymentNeedPay', [
            'order' => $order['data'],
            'configuration' => $configuration['data'],
        ]);
    }

    public function paymentOptionNeedPay($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Order
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/'.$id);
        $order = json_decode($response->getBody(), true);

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        // Payment Method
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/payment_method/active');
        $payment_method = json_decode($response->getBody(), true);

        return view('pages.transaction.paymentOptionNeedPay', [
            'order' => $order['data'],
            'configuration' => $configuration['data'],
            'payment_method' => $payment_method['data'],
        ]);
    }

    public function needPay(Request $request)
    {
        $body = [
            "order_code" => $request->order_code,
            "type_payment" => 'REPAYMENT',
            "payment_method" => $request->payment_method
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Create Payment
        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/order_customer/repayment', $body);
        $payment_method = json_decode($response->getBody(), true);
        
        return view('pages.transaction.paymentStatus', [
            'order' => $payment_method['data']
        ]);
    }
}
