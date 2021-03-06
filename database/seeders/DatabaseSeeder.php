<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil UserSeeder
        $this->call([
            UsersSeeder::class,
            TasksSeeder::class
        ]);

    }
}
