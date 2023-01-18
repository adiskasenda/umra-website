<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{

    public function emailVerification(Request $request)
    {
        return view('pages.feedBack.emailVerification', [
            'status' => $request->status,
            'sendretry' => $request->sendretry
        ]);
    }
    
}
