<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store()
    {
        // return view('contact');
        //untuk mengecek data atau varDumb kita menggunakan dd atau ddd
        //dd('ini Berfungsi'); //die and dumb
        ddd('Codingan Ini berfungsi'); //die, dumb and debug
    }
}
