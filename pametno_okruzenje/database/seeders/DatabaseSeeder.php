<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Resident;
use App\Models\Room;
use App\Models\Setting;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(2)->create();
        Home::factory(4)->create();
        
    }
}
