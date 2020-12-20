<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		DB::table('car_types')->insert([
			'car_name' => 'Duesenberg Roadster',
            'category' => 'roadster',
            'speed' => '45'
        ]);       
        DB::table('car_types')->insert([
			'car_name' => 'Ford Model Roadster',
            'category' => 'roadster',
            'speed' => '45'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Packard Twin Roadster',
            'category' => 'roadster',
            'speed' => '45'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Studebaker Roadster',
            'category' => 'roadster',
            'speed' => '45'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Durant Star Speedster',
            'category' => 'speedster',
            'speed' => '50'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Marmont Speedster',
            'category' => 'speedster',
            'speed' => '50'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Ford Truck',
            'category' => 'truck',
            'speed' => '40'
        ]);
		DB::table('car_types')->insert([
			'car_name' => 'Dodge Truck',
            'category' => 'truck',
            'speed' => '40'
        ]);
    }
}
