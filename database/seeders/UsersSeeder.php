<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'status' => 'active',
                'online_offline' => 'online',
                'token' => Str::random(),
                'name' => "managaer",
                'username' => "managaer",
                'password' => Hash::make("admin"),
                'email' => "managaer@example.com",
                'image' => "managaer.png",
                'comment' => "",
                'role' => 1
            ],
            [
                'status' => 'active',
                'online_offline' => 'online',
                'token' => Str::random(),
                'name' => "Admin",
                'username' => "Admin",
                'password' => Hash::make("admin"),
                'email' => "Admin@example.com",
                'image' => "Admin.png",
                'comment' => "",
                'role' => 2
            ],

        ];

        DB::table('users')->insert($users);
    }
}
