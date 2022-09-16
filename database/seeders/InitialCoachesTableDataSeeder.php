<?php

namespace Database\Seeders;

use App\Models\Coaches;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InitialCoachesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'amit yadav', 'time_zone' => 'ist', 'day_of_week' => 'monday', 'available_at' => '09:00:00', 'available_until' => '17:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'amit yadav', 'time_zone' => 'ist', 'day_of_week' => 'tuesday', 'available_at' => '09:00:00', 'available_until' => '17:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'amit yadav', 'time_zone' => 'ist', 'day_of_week' => 'wednesday', 'available_at' => '09:00:00', 'available_until' => '17:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'amit yadav', 'time_zone' => 'ist', 'day_of_week' => 'thursday', 'available_at' => '09:00:00', 'available_until' => '17:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'amit yadav', 'time_zone' => 'ist', 'day_of_week' => 'friday', 'available_at' => '09:00:00', 'available_until' => '17:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'rima sen', 'time_zone' => 'est', 'day_of_week' => 'monday', 'available_at' => '11:00:00', 'available_until' => '14:00:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'rima sen', 'time_zone' => 'est', 'day_of_week' => 'tuesday', 'available_at' => '11:00:00', 'available_until' => '14:00:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'rima sen', 'time_zone' => 'est', 'day_of_week' => 'wednesday', 'available_at' => '11:00:00', 'available_until' => '14:00:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'shawn wyne', 'time_zone' => 'pst', 'day_of_week' => 'monday', 'available_at' => '08:00:00', 'available_until' => '13:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'shawn wyne', 'time_zone' => 'pst', 'day_of_week' => 'tuesday', 'available_at' => '10:00:00', 'available_until' => '13:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'shawn wyne', 'time_zone' => 'pst', 'day_of_week' => 'wednesday', 'available_at' => '11:00:00', 'available_until' => '19:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'shawn wyne', 'time_zone' => 'pst', 'day_of_week' => 'thursday', 'available_at' => '09:00:00', 'available_until' => '18:30:00', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ];

        Coaches::insert($data);

    }
}
