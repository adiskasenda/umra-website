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
            'payment_method' => $payment_method['data'],
        ]);
    }

    public function storeCheckout(Request $request)
    {
        $card_data = json_decode($request->card_data, true)[0];

        foreach( $card_data as $key_jamaah => $jamaah ) {
            if ( !empty($jamaah['jamaah'])) {
                foreach( $jamaah['jamaah'] as $guest ) {
                    $order_guest[] = [
                        "type_bed" => $key_jamaah + 1,
                        "title" => "",
                        "first_name" => $guest['first_name'],
                        "last_name" => $guest['last_name'],
                        "birth_date" => date('Y-m-d', strtotime($guest['birth_date'])),
                        "gender" => $guest['gender'],
                        "address" => $guest['address'],
                        "phone_number" => $guest['phone_number'],
                        "phone_number" => 6282134060591,
                        "ktp_number" => $guest['ktp_number'],
                        "ktp_url" => "",
                        "passport_number" => $guest['passport_number'],
                        "passport_expiry_date" => date('Y-m-d', strtotime($guest['passport_expiry_date'])),
                        "passport_url" => "",
                        "nationality" => "",
                        "vaccine_status" => $guest['vaccine_status'],
                        "vaccine_url" => ""
                    ];
                }
            }
        }

        // Create Order
        $body = [
            "id_customer" => Session::get('user')['user_id'],
            "uuid_packet" => $request->uuid_packet,
            "phone_number" => Session::get('user')['phone'],
            "person_double" => $card_data[0]['doble'],
            "person_triple" => $card_data[1]['triple'],
            "person_quad" => $card_data[2]['quad'],
            "affliator_code" => "",
            "type_payment" => $request->type_payment,
            "id_payment_method" => $request->payment_method,
            "order_guest" => $order_guest
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        // Create Order
        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/order_customer', $body);
        $order = json_decode($response->getBody(), true);

        // Create Payment
        // $bodyPayment = [
        //     "order_code" => $order['data']['order_code'],
        //     "type_payment" => $request->type_payment,
        //     "payment_method" => $request->payment_method
        // ];

        // $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/order_customer/repayment', $bodyPayment);
        // $payment_method = json_decode($response->getBody(), true);

        return view('pages.transaction.paymentStatus', [
            'order' => $order['data']
        ]);

        // return response()->json([
        //     'status' => $order['status'],
        //     'message' => $order['message'],
        //     'data' => $order['data']
        // ]);
    }

    // public function paymentStatus($order_code)
    // {
    //     $this->header['ax-request-by'] = Session::get('user')['email'];
    //     $this->header['Authorization'] = 'Bearer '.Session::get('token');

    //     $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/code/'.$order_code);
    //     $order = json_decode($response->getBody(), true);

    //     if ( empty($order['data']) ) {
    //         return abort(404);
    //     }

    //     return view('pages.transaction.paymentStatus', [
    //         'order' => $order['data']
    //     ]);
    // }

    public function show($id)
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/order_customer/'.$id);
        $order = json_decode($response->getBody(), true);

        if ( empty($order['data']) ) {
            return abort(404);
        }

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
