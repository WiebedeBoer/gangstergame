<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class ForeignKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//hoods
		Schema::table('hoods', function (Blueprint $table) {
			$table->foreign('game')->references('game_id')->on('games');		
        });
		//buildings
		Schema::table('buildings', function (Blueprint $table) {
            $table->foreign('game')->references('game_id')->on('games');
            $table->foreign('hood')->references('hood_id')->on('hoods');
            $table->foreign('type')->references('type_id')->on('building_types');
            $table->foreign('owner')->references('gang_id')->on('gangs');		
        });
		//gangs
		Schema::table('gangs', function (Blueprint $table) {
            $table->foreign('game')->references('game_id')->on('games');
            $table->foreign('user')->references('id')->on('users');	
        });
		//gangsters
		Schema::table('gangsters', function (Blueprint $table) {
            $table->foreign('game')->references('game_id')->on('games');
            $table->foreign('gang')->references('gang_id')->on('gangs');	
        });
		//equipment
		Schema::table('equipment', function (Blueprint $table) {
            $table->foreign('type')->references('type_id')->on('equipment_types');
            $table->foreign('gangster')->references('gangster_id')->on('gangsters');	
        });
		//cars
		Schema::table('cars', function (Blueprint $table) {
            $table->foreign('game')->references('game_id')->on('games');
            $table->foreign('gang')->references('gang_id')->on('gangs');	
            $table->foreign('type')->references('type_id')->on('car_types');	
        });
		//guards
		Schema::table('guards', function (Blueprint $table) {
            $table->foreign('gangster')->references('gangster_id')->on('gangsters');
            $table->foreign('building')->references('building_id')->on('buildings');
        });
		//passengers
		Schema::table('passengers', function (Blueprint $table) {
            $table->foreign('gangster')->references('gangster_id')->on('gangsters');
            $table->foreign('car')->references('car_id')->on('cars');
        });
    }
}
