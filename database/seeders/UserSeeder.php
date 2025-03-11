<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => 'password',
                'role_id' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => 'password',
                'role_id' => 2
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
