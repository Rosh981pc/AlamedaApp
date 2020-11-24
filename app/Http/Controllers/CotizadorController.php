<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageRecived;
use Mail;

class CotizadorController extends Controller
{
    public function store(Request $request){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $for = "jru981@gmail.com";
        // $new_message = "Numero de teléfono: " + $request->phone + "";
        Mail::to($for)->queue(new MessageRecived($message));
        
    }
}
