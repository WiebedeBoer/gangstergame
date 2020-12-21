<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //game 1

        //warehouse
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '116',
            'y' => '56',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '116',
            'y' => '59',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '119',
            'y' => '56',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '119',
            'y' => '59',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '29',
            'y' => '101',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '32',
            'y' => '101',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '98',
            'y' => '119',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '101',
            'y' => '119',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '74',
            'y' => '86',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'x' => '77',
            'y' => '86',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
        //docks
		DB::table('building_types')->insert([
			'building_name' => 'docks',
            'x' => '116',
            'y' => '50',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '41',
        ]);
        //railroad
		DB::table('building_types')->insert([
			'building_name' => 'railroad station',
            'x' => '98',
            'y' => '95',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '42',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'railroad station',
            'x' => '29',
            'y' => '95',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '42',
        ]);
        //newspaper
		DB::table('building_types')->insert([
			'building_name' => 'Star Tribune',
            'x' => '113',
            'y' => '65',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '155',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Financial Times',
            'x' => '110',
            'y' => '44',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '155',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Morning Herald',
            'x' => '35',
            'y' => '23',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '155',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Daily Journal',
            'x' => '20',
            'y' => '71',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '155',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Post Standard',
            'x' => '23',
            'y' => '98',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '155',
        ]);
        //radio
		DB::table('building_types')->insert([
			'building_name' => 'radio',
            'x' => '110',
            'y' => '59',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '156',
        ]);
        //electric company
		DB::table('building_types')->insert([
			'building_name' => 'electric company',
            'x' => '116',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '170',
        ]);
        //water company
		DB::table('building_types')->insert([
			'building_name' => 'water company',
            'x' => '119',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '171',
        ]);
        //university
		DB::table('building_types')->insert([
			'building_name' => 'university',
            'x' => '65',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '172',
        ]);
        //army barracks
		DB::table('building_types')->insert([
			'building_name' => 'army barracks',
            'x' => '56',
            'y' => '2',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '173',
        ]);
        //city hall
		DB::table('building_types')->insert([
			'building_name' => 'city hall',
            'x' => '95',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '178',
        ]);
        //court
		DB::table('building_types')->insert([
			'building_name' => 'court',
            'x' => '101',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '174',
        ]);
        //fbi
		DB::table('building_types')->insert([
			'building_name' => 'FBI',
            'x' => '83',
            'y' => '89',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '175',
        ]);
        //prison
		DB::table('building_types')->insert([
			'building_name' => 'prison',
            'x' => '53',
            'y' => '92',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '176',
        ]);
        //police
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '113',
            'y' => '98',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '98',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '62',
            'y' => '92',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '32',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '41',
            'y' => '41',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'x' => '77',
            'y' => '35',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '177',
        ]);
        //fire department
		DB::table('building_types')->insert([
			'building_name' => 'fire department',
            'x' => '98',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '157',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'fire department',
            'x' => '68',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '157',
        ]);
        //hospital
		DB::table('building_types')->insert([
			'building_name' => 'Saint Anthony Hospital',
            'x' => '71',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '158',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Mount Sinai Hospital',
            'x' => '95',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '158',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Northwestern Memorial Hospital',
            'x' => '110',
            'y' => '41',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '158',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Saint Elizabeth Hospital',
            'x' => '35',
            'y' => '32',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '158',
        ]);
        //church
		DB::table('building_types')->insert([
			'building_name' => 'Presbyterian Church',
            'x' => '86',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Fourth Presbyterian Church',
            'x' => '116',
            'y' => '68',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Mary Queen of Heaven Catholic Church',
            'x' => '74',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Our Lady of the Mount Catholic Church',
            'x' => '26',
            'y' => '86',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Lutheran Church',
            'x' => '5',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Baptist Church',
            'x' => '107',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '1',
            'type' => '179',
        ]);
        //synagogue
		DB::table('building_types')->insert([
			'building_name' => 'synagogue',
            'x' => '104',
            'y' => '83',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '180',
        ]);
        //orphanage
		DB::table('building_types')->insert([
			'building_name' => 'orphanage',
            'x' => '50',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '181',
        ]);
        //park
		DB::table('building_types')->insert([
			'building_name' => 'Columbus Park',
            'x' => '29',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '182',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Garfield Park',
            'x' => '62',
            'y' => '59',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '182',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Humboldt Park',
            'x' => '74',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '182',
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'Lincoln Park',
            'x' => '116',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '182',
        ]);
    
    }
}
