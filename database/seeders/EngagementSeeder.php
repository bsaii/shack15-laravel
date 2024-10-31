<?php

namespace Database\Seeders;

use App\Models\Engagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EngagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Engagement::factory()->count(900)->create();
    }
}
