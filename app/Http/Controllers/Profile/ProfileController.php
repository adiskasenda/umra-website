<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ProfileController extends Controller
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

    public function profile()
    {
        return view('pages.profile.profile', [
            'user' => Session::get('user')
        ]);
    }

    public function editProfile(Request $request)
    {
        return view('pages.profile.editProfile', [
            'user' => Session::get('user'),
            'status' => $request->status
        ]);
    }

    public function updateProfile(Request $request)
    {
        if ( !empty($request->avatar) ) {
            $url_avatar = app('App\Http\Controllers\File\FileUploadController')->uploadFile( $request->file('avatar'), 'profile' );
        } else {
            $url_avatar = $request->avatar_old;
        }

        $body = [
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "address" => $request->address,
            "birthday" => date('Y-m-d', strtotime($request->birthday)),
            "gender" => $request->gender,
            "url_photo" => $url_avatar,
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/'.Session::get('user')['user_id'], $body);
        $customer = json_decode($response->getBody(), true);

        if ( $customer['status'] == '2' ) {
            return redirect()->back()
                            ->withInput($request->input())
                            ->with('error', $customer['message']);
        }

        $user = Session::get('user');
        $user['url_photo'] = $url_avatar;
        $user['firstname'] = $request->firstname;
        $user['lastname'] = $request->lastname;
        $user['birthday'] = $request->birthday;
        $user['gender'] = $request->gender;
        $user['address'] = $request->address;
        Session::put([
            'user' => $user
        ]);

        return redirect(url('/profile'))->withSuccess('Data Customer Berhasil Di Update');
    }

    public function updateEmail(Request $request)
    {
        $body = [
            "email" => $request->email
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_email/'.Session::get('user')['user_id'], $body);
        $customer = json_decode($response->getBody(), true);

        if ( $customer['status'] == '1' ) {
            $user = Session::get('user');
            $user['email'] = $request->email;
            $user['verificate_email'] = null;
            Session::put([
                'user' => $user
            ]);
        }

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
            "otp" => $request->email,
        ];
        
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/validate_otp_email', $body);
        $customer = json_decode($response->getBody(), true);
        
        if ( $customer['status'] == '1' ) {
            $user = Session::get('user');
            $user['verificate_email'] = 1;
            Session::put([
                'user' => $user
            ]);
        }

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function updatePhone(Request $request)
    {
        $body = [
            "phone" => $request->phone
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_phone/'.Session::get('user')['user_id'], $body);
        $customer = json_decode($response->getBody(), true);

        if ( $customer['status'] == '1' ) {
            $user = Session::get('user');
            $user['phone'] = $request->phone;
            $user['verificate_phone'] = null;
            Session::put([
                'user' => $user
            ]);
        }

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function validateOtpPhone(Request $request)
    {
        $body = [
            "phone" => $request->phone,
            "otp" => $request->otp,
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->post($this->url.'/core-umra/customer/validate_otp_phone', $body);
        $customer = json_decode($response->getBody(), true);
        
        if ( $customer['status'] == '1' ) {
            $user = Session::get('user');
            $user['verificate_phone'] = 1;
            Session::put([
                'user' => $user
            ]);
        }

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function profilePassword()
    {
        return view('pages.profile.profilePassword');
    }

    public function updatePassword(Request $request)
    {
        $body = [
            "password_new" => $request->password_new,
            "password_confirm" => $request->password_confirm
        ];
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_password/'.Session::get('user')['user_id'], $body);
        $customer = json_decode($response->getBody(), true);

        if ( $customer['status'] == '2' ) {
            return redirect()->back()
                            ->withInput($request->input())
                            ->with('error', $customer['message']);
        }

        return redirect()->back()
                        ->withSuccess('Data Password Customer Berhasil Di Update');
    }

    public function profilePIN()
    {
        return view('pages.profile.profilePIN', [
            'user' => Session::get('user')
        ]);
    }

    public function newPin(Request $request)
    {
        $body = [
            "pin_new" => $request->pin_new,
            "pin_confirm" => $request->pin_confirm
        ];
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/change_pin/'.Session::get('user')['user_id'], $body);
        $updatePin = json_decode($response->getBody(), true);

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/'.Session::get('user')['user_id']);
        $customer = json_decode($response->getBody(), true);
        Session::put([
            'user' => $customer['data']
        ]);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function sendEmailPIN()
    {
        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/get_forgotpin/'.Session::get('user')['email']);
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }

    public function validateOTPEmailPIN()
    {
        $body = [
            "email" => $request->email,
            "otp" => $request->otp
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/customer/validate_otp_email');
        $customer = json_decode($response->getBody(), true);

        return response()->json([
            'status' => $customer['status'],
            'message' => $customer['message'],
            'data' => $customer['data']
        ]);
    }
}

