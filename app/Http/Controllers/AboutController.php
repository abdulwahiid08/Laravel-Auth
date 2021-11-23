<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $test = 'Ini Halaman About yang diambil dari About Controller';
        return view('about', ['getData' => $test]);
    }
}
