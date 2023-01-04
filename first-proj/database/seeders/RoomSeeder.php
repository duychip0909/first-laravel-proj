<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('rooms')->truncate();
        DB::table('rooms')->insert([
            [
                'room_type' => 'Standard Room',
                'room_description' => 'Standard room means accommodation with basic amenities such as proper lighting, toilet with running water, ventilation and door locking system.',
                'room_price' => '500',
                'adult_quantity' => '2',
                'children_quantity' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'room_type' => 'Deluxe Room',
                'room_description' => 'Deluxe rooms, are modern decorated, can accommodate up to 2 persons',
                'room_price' => '1500',
                'adult_quantity' => '2',
                'children_quantity' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'room_type' => 'Double Room',
                'room_description' => 'A room assigned to two people. May have one or more beds. The room size or area of Double Rooms are generally between 40 m² to 45 m².',
                'room_price' => '1000',
                'adult_quantity' => '4',
                'children_quantity' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
