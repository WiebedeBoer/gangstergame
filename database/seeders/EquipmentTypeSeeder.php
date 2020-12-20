<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('equipment_types')->insert([
			'equipment_name' => 'tommygun',
			'category' => 'firearm'
        ]);	
		DB::table('equipment_types')->insert([
			'equipment_name' => 'pistol',
			'category' => 'firearm'
        ]);	
		DB::table('equipment_types')->insert([
			'equipment_name' => 'rifle',
			'category' => 'firearm'
        ]);	
		DB::table('equipment_types')->insert([
			'equipment_name' => 'shotgun',
			'category' => 'firearm'
        ]);	
		DB::table('equipment_types')->insert([
			'equipment_name' => 'dynamite',
			'category' => 'explosives'
		]);	
    }
}
