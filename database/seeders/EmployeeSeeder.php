<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timezone = "US/Pacific";
        
        Employee::create([
            'name' => 'John',
            'performance' => 58,
            'date' => Carbon::createFromDate(2021, 12, 1, $timezone),
        ]);
        Employee::create([
            'name' => 'Daniel',
            'performance' => 87,
            'date' => Carbon::createFromDate(2021, 12, 1, $timezone),
        ]);
        Employee::create([
            'name' => 'Sally',
            'performance' => 34,
            'date' => Carbon::createFromDate(2021, 12, 1, $timezone),
        ]);
        Employee::create([
            'name' => 'Tiffany',
            'performance' => 99,
            'date' => Carbon::createFromDate(2021, 12, 1, $timezone),
        ]);
    }
}
