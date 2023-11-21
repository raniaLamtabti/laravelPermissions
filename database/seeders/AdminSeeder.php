<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    public static $password ='password';
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $user = User::create([
            'name' => 'adminsup',
            'email' => 'adminsup@test.com',
            'email_verified_at' => now(),
            'password' => static::$password,
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('adminsup');
    }
}