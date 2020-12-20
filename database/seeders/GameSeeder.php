<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	//games
    public function run()
    {
		DB::table('games')->insert([
			'game_name' => 'New Temperance',
			'ground_texture' => 'chicago',
			'players' => '20'
		]);	
    }
}
