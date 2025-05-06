<?php

namespace Database\Seeders;

use App\Models\home_workshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class home_workshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        home_workshop::factory(10)->create();
    }
}
