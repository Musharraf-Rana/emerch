<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendmail(Request $req)
    {
        
        $to_name = $req->name;
        $to_email = $req->email;
        $mailData = [
            'name' => $req->name,
            'contact' => $req->number,
            'email' => $req->email,
        ];
        if (Mail::send('email', $mailData, function ($message) use ($to_name, $to_email) {


            $message->to('support@emerchjunction.com', $to_name)
                ->subject('Emerch Junction');
            $message->from('support@emerchjunction.com', $to_name);
            // dd('asdfasd');
        })) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
