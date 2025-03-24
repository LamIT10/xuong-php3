<?php

namespace Database\Seeders;

use App\Models\FriendShip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FriendShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FriendShip::factory(5)->create();
    }
}
