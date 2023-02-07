<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class TransactionController extends Controller
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

    public function jamaah($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Package Product
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);

        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        return view('pages.transaction.jamaah', [
            'package_product' => $package_product['data'],
            'configuration' => $configuration['data'],
        ]);
    }

    public function biodata($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Package Product
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        return view('pages.transaction.biodata', [
            'package_product' => $package_product['data'],
            'configuration' => $configuration['data'],
        ]);
    }

    public function checkout($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Package Product
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        return view('pages.transaction.checkout', [
            'package_product' => $package_product['data'],
            'configuration' => $configuration['data'],
        ]);
    }

    public function payment($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Package Product
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        return view('pages.transaction.payment', [
            'package_product' => $package_product['data'],
            'configuration' => $configuration['data'],
        ]);
    }

    public function paymentOption($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Package Product
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        // Payment Method
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/payment_method/active');
        $payment_method = json_decode($response->getBody(), true);

        return view('pages.transaction.paymentOption', [
            'package_product' => $package_product['data'],
            'configuration' => $configuration['data'],
            'payment_method' => $payment_method
        ]);
    }

    public function storeCheckout($id, Request $request)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);

        // Create Order
        $body = [
            "id_customer" => Session::get('user')['user_id'],
            "uuid_packet" => "fec2779d-6ce0-11ed-9b9f-525400b9f32b",
            "phone_number" => Session::get('user')['phone'],
            "person_double" => "1",
            "person_triple" => "0",
            "person_quad" => "0",
            "affliator_code" => "",
            "type_payment" => "DOWNPAYMENT",
            "order_guest" => [
                [
                    "type_bed" => 2,
                    "title" => "Mr",
                    "first_name" => "Hanif",
                    "last_name" => "Al Baaits",
                    "birth_date" => "1996-06-06",
                    "gender" => 1,
                    "address" => "Bekasi",
                    "phone_number" => "62811831891",
                    "ktp_number" => "",
                    "ktp_url" => "",
                    "passport_number" => "",
                    "passport_expiry_date" => "",
                    "passport_url" => "",
                    "nationality" => "",
                    "vaccine_status" => 0,
                    "vaccine_url" => ""
                ]
            ]
        ];

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer', $body);
        $order = json_decode($response->getBody(), true);

        // Create Payment
        $bodyPayment = [
            "order_code" => "PKG2022122000002",
            "type_payment" => "REPAYMENT",
            "payment_method" => 5
        ];
 
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/repayment', $bodyPayment);
        $payment_method = json_decode($response->getBody(), true);

        return response()->json([
            'sukses' => 'ok'
        ]);
    }

    public function paymentSuccess()
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        return view('pages.transaction.paymentSuccess');
    }

    public function show($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/'.$id);
        $order = json_decode($response->getBody(), true);

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/META');
        $configuration = json_decode($response->getBody(), true);

        // configurationPayment
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PAYMENT');
        $configurationPayment = json_decode($response->getBody(), true);
        
        return view('pages.transaction.detailTrasaction',[
            'order' => $order['data'],
            'configuration' => $configuration['data'],
            'configurationPayment' => $configurationPayment['data']
        ]);
    }
}
