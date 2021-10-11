<?php

namespace Database\Seeders;

use Hash,
    Str;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => "cdrosalita@student.apc.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make("password123"),
            'user_name' => "admin",
            'user_level' => '1',
            'user_status' => '1', // 0 = Disabled : 1 = Enabled
            'remember_token' => Str::random(60)
        ]);
    }
}
