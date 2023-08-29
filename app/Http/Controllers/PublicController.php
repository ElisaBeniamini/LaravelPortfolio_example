<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{


    public function homepage()
    {
        return view('homepage');
    }

    public function chisono()
    {
        return view('chisono');
    }
    public  function contatti()
    {
        return view('contatti');
    }

    public function send(Request $request)
    {
        //  dd($request);
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'messaggio' => 'required|min:10'
        ]);
        $data = [ //mappatura dati lato server
            'nome' => $request->name,
            'email' => $request->email,
            'messaggio' => $request->messaggio
        ];
        Mail::to($request->email)->send(new InfoMail($data));
        dd($data);
    }
}
