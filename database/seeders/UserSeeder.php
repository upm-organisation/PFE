<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'demo',
                'email' => 'demo@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'admin1',
                'email' => 'admin1@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'employee1',
                'email' => 'employee1@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'employee2',
                'email' => 'employee2@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
            [
                'name' => 'employee3',
                'email' => 'employee3@hotel.com',
                'password' => Hash::make('demo@123'),
            ],
        ]);
    }
}
