<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'roomNumber' => 1,
                'price' => 500,
            ],
            [
                'roomNumber' => 2,
                'price' => 500,
            ],
            [
                'roomNumber' => 3,
                'price' => 300,
            ],
            [
                'roomNumber' => 4,
                'price' => 800,
            ],
        ]);
    }
}
