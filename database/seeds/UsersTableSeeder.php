<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$y8.84wJouSyTrlzdkaMrgeEOj35XZ0PrNs1YM6RqKCph6n0DXzU/y',
                'remember_token' => null,
                'first_name'     => '',
                'last_name'      => '',
                'phone_no'       => '',
                'city'           => '',
                'state'          => '',
                'zipcode'        => '',
            ],
        ];

        User::insert($users);
    }
}
