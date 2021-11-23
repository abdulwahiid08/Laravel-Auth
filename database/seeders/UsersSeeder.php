<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->count(20)->create();
        // $users = collect([
        //     [
        //         'name' => 'Abdul Wahid',
        //         'email' => 'AbdulWahid@gmail.com',
        //                 // bcrypt/hash/md5 itu beruna untuk menecrypsi password
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now()
        //     ],
        //     [
        //         'name' => 'Dimas Ferarizki',
        //         'email' => 'Dimasfera@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ],
        //     [
        //         'name' => 'Rendi Aulia',
        //         'email' => 'RendiAulia@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ]
        // ])->each(function ($user) {
        //     User::create($user);
        // });

        // pengganti foreach bisa digunakan seperti each yang diatas
        // foreach($users as $user) {

        //     User::create($user);
        // }
    }
}
