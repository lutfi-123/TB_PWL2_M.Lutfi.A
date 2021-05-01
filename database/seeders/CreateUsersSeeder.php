<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'User',
                'username' => 'User',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'photo' => 'user.png',
                'roles_id' => 2
            ],
            [
                'name' => 'Admin',
                'username' => 'lutfi-123',
                'email' => 'admin@mail.com',
                'password' => bcrypt('12345'),
                'photo' => 'admin.png',
                'roles_id' => 1
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
