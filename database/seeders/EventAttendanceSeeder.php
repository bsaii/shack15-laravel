<?php

namespace Database\Seeders;

use App\Models\EventAttendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventAttendance::factory()->count(75)->create();
    }
}
