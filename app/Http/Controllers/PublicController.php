<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{


    public function homepage()
    {
        return view('homepage');
    }

    public  function contatti()
    {
        return view('contatti');
    }


    public function chisono()
    {
        return view('chisono');
    }
}
