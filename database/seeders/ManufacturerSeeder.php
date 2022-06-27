<?php

namespace Database\Seeders;

// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;
// use Carbon\Carbon;
// use App\Models\Manufacturer;



class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Manufacturer::factory()->count(5)->create();
        \App\Models\Manufacturer::factory()->count(5)->create();
    }
}
