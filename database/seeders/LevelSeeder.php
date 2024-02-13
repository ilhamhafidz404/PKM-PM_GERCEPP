<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::insert([
            [
                "name" => "SD",
            ],
            [
                "name" => "SMP",
            ],
            [
                "name" => "SMA",
            ],
            [
                "name" => "S1",
            ],
        ]);
    }
}
