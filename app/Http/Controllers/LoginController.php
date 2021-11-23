<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index()
        {
            return view('auth.login');
        }

        public function store(LoginRequest $loginRequest)
        {
            // $loginRequest->validate([
            //     'inputEmail' => ['required', 'email'],
            //     'inputPassword' => ['required']
            // ]);

            $credentials = [
                'email' => $loginRequest->inputEmailLogin,
                'password' => $loginRequest->inputPasswordLogin
            ];
        //dd($credentials);
        //dd(Auth::attempt($credentials));
            if(Auth::attempt($credentials))
                {
                    session()->flash('success', 'You are now logged in');

                    return redirect(RouteServiceProvider::HOME);
                    // REDIRECT DIATAS SAMA DENGA return redirect('/');
                }
                // Jika user tidak ada, kita tampilkan kesalahan

                 throw ValidationException::withMessages([
                    // name input
                    'inputEmailLogin' => 'Opss! Email anda salah.',
                    //'inputPasswordLogin' => 'Opss! Password anda salah'
                 ]);





            // $getUser = User::whereEmail($loginRequest->inputEmailLogin)->first();
            // // Cek emailnya ada atau tidak
            // if ($getUser) {
            //     // jika ada email, maka kita cek password nya
            //     // Ini value yang diambil dari inputan , ini mengecek apakah value sama dengan field yang ada di db
            //     if (Hash::check($loginRequest->inputPasswordLogin, $getUser->password)) {
            //         //dd(true);
            //         // Jika keduanya sudah ada, maka kita login kan user
            //         Auth::login($getUser);

            //         // Membuat flassh message
            //         session()->flash('success', 'You are now logged in');

            //         return redirect('/');
            //         }
            //     }

                // Jika user tidak ada, kita tampilkan kesalahan

                //  throw ValidationException::withMessages([
                //     // field table
                //     'email' => 'Opss! Email anda salah.',
                //  ]);

    }
}



