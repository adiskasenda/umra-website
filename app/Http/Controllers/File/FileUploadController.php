<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Session;
use Ramsey\Uuid\Uuid;

class FileUploadController extends Controller
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

    public function uploadFile($file, $type)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)
                        ->attach('file', file_get_contents($file), date('dmyHis').'-'.$file->getClientOriginalName())
                        ->post($this->url.'/core-umra/upload_file', [
                            'type' => $type
                        ]);
        
        $file = json_decode($response->getBody(), true);
        
        return $file['message'];
    }

}
