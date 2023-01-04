<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
           [
               'name' => 'duychip9901',
               'email' => 'duychip9901@gmail.com',
               'password' => bcrypt('123456'),
               'created_at' => Carbon\Carbon::now(),
               'updated_at' => Carbon\Carbon::now(),
           ],
            [
                'name' => 'duychip0909',
                'email' => 'duychip9901.backup@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
