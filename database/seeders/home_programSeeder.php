<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\home_program;
use Illuminate\Database\Seeder;

class home_programSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        home_program::factory(10)->create();
    }
}
