<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function __invoke($identifier)
     {
        return view('blog', ['getValue' => $identifier]);
     }
}
