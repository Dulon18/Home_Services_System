<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'01624781462',
            'password'=>bcrypt('18103319'),
            'role'=>'admin',
            
        ]);

        User::create([
            'name'=>'Salam Mia',
            'email'=>'s22@gmail.com',
            'phone'=>'01624781462',
            'password'=>bcrypt('1234'),
            'role'=>'sprovider',
            
        ]);

        User::create([
            'name'=>'Shafiq Ahmed',
            'email'=>'sa23@gmail.com',
            'phone'=>'01624781462',
            'password'=>bcrypt('1234'),
            'role'=>'sprovider',
            
        ]);
    }
}
