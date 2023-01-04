<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Room;
use App\Models\Location;
use App\Models\Region;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Location::unguard();
        $this->call(UserSeeder::class);
        Location::reguard();
        $this->call(RegionSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(RoomSeeder::class);
    }
}
