<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menggunakan __invoke supaya route bisa memanggil semua metdho di class controller ini
    public function __invoke(Request $request)
    {
        // $getValue = $request->name;
        return view('home', ['getValue' => $request->name]);
    }
}
