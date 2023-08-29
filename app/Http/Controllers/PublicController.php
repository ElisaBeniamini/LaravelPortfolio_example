<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'name' => 'required name',
            'email' => 'required email',
            'messaggio' => 'required|min:10'
        ]);
    }
}
