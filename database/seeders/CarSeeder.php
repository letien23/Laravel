<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;
// use Carbon\Carbon;
// use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Car::factory()->count(5)->create();
        // DB::table('cars')->insert([
        //     'make' => Str::random(10),
        //     'model' => Str::random(10),
        //     'produced_on' => Carbon::parse('01-01-2022'),
        // ]);
    }
}
