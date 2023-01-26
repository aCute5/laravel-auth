<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Dario',
                'email' => 'dario@asdf.asdf',
                'password' => Hash::make("giacomo"),
            ],
            [
                'name' => 'Giacomo',
                'email' => 'giacomo@asdf.asdf',
                'password' => Hash::make("giulia"),
            ],
            [
                'name' => 'Luca',
                'email' => 'ieri@asdf.asdf',
                'password' => Hash::make("nicole"),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
