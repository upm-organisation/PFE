<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'salary' => 8000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'administrator',
                'user_id' => 2,
            ],
            [
                'salary' => 8000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'administrator',
                'user_id' => 3,
            ],
            [
                'salary' => 8000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'administrator',
                'user_id' => 4,
            ],
            [
                'salary' => 7000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'employee',
                'user_id' => 5,
            ],
            [
                'salary' => 7000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'employee',
                'user_id' => 6,
            ],
            [
                'salary' => 7000,
                'startWorkTime' => '08:30',
                'endtWorkTime' => '17:30',
                'role' => 'employee',
                'user_id' => 7,
            ],
        ]);
    }
}
