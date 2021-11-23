<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();

        session()->flash('logout', 'You are now log out');
        return redirect(RouteServiceProvider::HOME);
        // REDIRECT DIATAS SAMA DENGA return redirect('/');
    }
}
