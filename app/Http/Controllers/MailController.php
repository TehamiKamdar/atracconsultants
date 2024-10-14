<?php

namespace App\Http\Controllers;

use App\Mail\ApproveMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailRequest(Request $req){
        $consult = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
            'qualification' => $req->qualification,
            'country_id' => $req->country_id,
            'field' => $req->field
        ];
        Mail::to($req->mail)->send(new ApproveMail($consult));
    }
}
