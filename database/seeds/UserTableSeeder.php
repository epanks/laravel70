<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
        User::create([
            'name' => 'Super Admin',
            'email' => 'epanks@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'superadmin'
        ]);

        User::create([
            'name' => 'Admin Timur',
            'email' => 'pusatab.timur@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Balai',
            'email' => 'balai@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'user'
        ]);
    }
}
