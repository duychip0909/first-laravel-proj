<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('locations')->insert([
                'name' => $faker->city,
                'description' => $faker->sentence,
                'status' => $faker->numberBetween($min = 0, $max = 1),
                'created_at' => $faker->date("Y-m-d H:i:s"),
                'updated_at' => $faker->date('Y-m-d H:i:s'),
                'image' => $faker->imageUrl(1920, 1080, 'animals', true, true, true)
            ]);
        }
    }
}
