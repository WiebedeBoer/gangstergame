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
        //freight forwarding (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '98',
            'y' => '116',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '74',
            'y' => '83',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '113',
            'y' => '59',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '32',
            'y' => '104',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '32',
            'y' => '119',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '29',
            'y' => '23',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'freight forwarding',
            'x' => '77',
            'y' => '26',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '39',
        ]);
        //warehouse (128,64,64)
		DB::table('buildings')->insert([
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
		DB::table('buildings')->insert([
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
		DB::table('buildings')->insert([
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
		DB::table('buildings')->insert([
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
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '29',
            'y' => '101',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '32',
            'y' => '101',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '98',
            'y' => '119',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '101',
            'y' => '119',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '74',
            'y' => '86',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'warehouse',
            'x' => '77',
            'y' => '86',
            'economy' => 'normalcy',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '40',
        ]);
        //docks (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'Docks',
            'x' => '116',
            'y' => '50',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '1',
            'type' => '41',
        ]);
        //railroad (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'Southern Railroad Station',
            'x' => '98',
            'y' => '95',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x2',
            'game' => '1',
            'hood' => '10',
            'type' => '42',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Western Railroad Station',
            'x' => '29',
            'y' => '95',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x2',
            'game' => '1',
            'hood' => '12',
            'type' => '42',
        ]);
        //newspaper (136,128,90)
		DB::table('buildings')->insert([
			'building_name' => 'Financial Times',
            'x' => '113',
            'y' => '65',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Star Tribune',
            'x' => '110',
            'y' => '44',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Morning Herald',
            'x' => '35',
            'y' => '23',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Daily Journal',
            'x' => '20',
            'y' => '71',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '11',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Standard',
            'x' => '23',
            'y' => '98',
            'economy' => 'normalcy',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '155',
        ]);
        //radio (136,128,90)
		DB::table('buildings')->insert([
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
        //electric company (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'Electric Company',
            'x' => '116',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '170',
        ]);
        //water company (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'Water Company',
            'x' => '119',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '171',
        ]);
        //university (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'University',
            'x' => '65',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '3',
            'type' => '172',
        ]);
        //army barracks (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Army Barracks',
            'x' => '56',
            'y' => '2',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '18',
            'type' => '173',
        ]);
        //city hall (64,34,64)
		DB::table('buildings')->insert([
			'building_name' => 'City Hall',
            'x' => '95',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '178',
        ]);
        //court (64,34,64)
		DB::table('buildings')->insert([
			'building_name' => 'Court',
            'x' => '101',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '174',
        ]);
        //fbi (15,15,55)
		DB::table('buildings')->insert([
			'building_name' => 'FBI',
            'x' => '83',
            'y' => '89',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '2',
            'type' => '175',
        ]);
        //prison (64,0,0)
		DB::table('buildings')->insert([
			'building_name' => 'Prison',
            'x' => '53',
            'y' => '92',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '4',
            'type' => '176',
        ]);
        //police (27,27,66)
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Bronzeville)',
            'x' => '113',
            'y' => '98',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '177',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Loop)',
            'x' => '98',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '177',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Cicero)',
            'x' => '62',
            'y' => '92',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '177',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Brookfield)',
            'x' => '32',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '11',
            'type' => '177',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Belmont)',
            'x' => '41',
            'y' => '41',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '177',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Police Department (Humboldt Park)',
            'x' => '77',
            'y' => '35',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '177',
        ]);
        //fire department (192,107,111)
		DB::table('buildings')->insert([
			'building_name' => 'Fire Department (Loop)',
            'x' => '98',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '157',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Fire Department (Cicero)',
            'x' => '68',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '157',
        ]);
        //hospital (204,142,99)
		DB::table('buildings')->insert([
			'building_name' => 'Saint Anthony Hospital',
            'x' => '71',
            'y' => '71',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '158',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Mount Sinai Hospital',
            'x' => '95',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '158',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Northwestern Memorial Hospital',
            'x' => '110',
            'y' => '41',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '158',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Saint Elizabeth Hospital',
            'x' => '35',
            'y' => '32',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '158',
        ]);
        //church (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Presbyterian Church',
            'x' => '86',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '7',
            'type' => '179',
        ]);
		DB::table('buildings')->insert([
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
		DB::table('buildings')->insert([
			'building_name' => 'Mary Queen of Heaven Catholic Church',
            'x' => '74',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '3',
            'type' => '179',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Our Lady of the Mount Catholic Church',
            'x' => '26',
            'y' => '86',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '11',
            'type' => '179',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Lutheran Church',
            'x' => '5',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '12',
            'type' => '179',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Baptist Church',
            'x' => '107',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x5',
            'game' => '1',
            'hood' => '10',
            'type' => '179',
        ]);
        //synagogue (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Synagogue',
            'x' => '104',
            'y' => '83',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '180',
        ]);
        //orphanage (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Orphanage',
            'x' => '50',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '181',
        ]);
        //park (123,179,105)
		DB::table('buildings')->insert([
			'building_name' => 'Columbus Park',
            'x' => '29',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '11',
            'type' => '182',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Garfield Park',
            'x' => '62',
            'y' => '59',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '9',
            'type' => '182',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Humboldt Park',
            'x' => '74',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '7',
            'type' => '182',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Lincoln Park',
            'x' => '116',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '5x5',
            'game' => '1',
            'hood' => '8',
            'type' => '182',
        ]);
        //water (156,211,219)
        //pavement (127,127,127)
        //road tarmac (195,195,195)
    
    }
}
