<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Maurizio',
                'email' => 'maurizio@gmail.com',
                'password' => Hash::make('asdfasdf'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
