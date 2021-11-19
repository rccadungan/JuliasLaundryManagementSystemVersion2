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
        User::getQuery()->delete();
        User::insert([
            [
                'email' => "cdrosalita@student.apc.edu.ph",
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make("password123"),
                'user_name' => "Admin",
                'user_level' => '1', // 1 = admin account : 2 = Girl accounts
                'user_status' => '1', // 0 = Disabled : 1 = Enabled
                'remember_token' => Str::random(60)
            ],
            [
                'email' => "julias@laundry.com",
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make("juliaslaundry"),
                'user_name' => "Julia_admin",
                'user_level' => '1', // 1 = admin account : 2 = Girl accounts
                'user_status' => '1', // 0 = Disabled : 1 = Enabled
                'remember_token' => Str::random(60)
            ],
            [
                'email' => "girl1@julias.com",
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make("girl1"),
                'user_name' => "Girl 1",
                'user_level' => '2', // 1 = admin account : 2 = Girl accounts
                'user_status' => '1', // 0 = Disabled : 1 = Enabled
                'remember_token' => Str::random(60)
            ],
            [
                'email' => "girl2@julias.com",
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make("girl2"),
                'user_name' => "Girl 2",
                'user_level' => '2', // 1 = admin account : 2 = Girl accounts
                'user_status' => '1', // 0 = Disabled : 1 = Enabled
                'remember_token' => Str::random(60)
            ],
            [
                'email' => "girl3@julias.com",
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make("girl3"),
                'user_name' => "Girl 3",
                'user_level' => '2', // 1 = admin account : 2 = Girl accounts
                'user_status' => '1', // 0 = Disabled : 1 = Enabled
                'remember_token' => Str::random(60)
            ],
        ]);
    }
}
