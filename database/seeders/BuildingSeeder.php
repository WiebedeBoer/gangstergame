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
			'building_name' => 'Freight Forwarding',
            'x' => '98',
            'y' => '116',
            'economy' => 'dilapidated',
            'income' => '800',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '74',
            'y' => '83',
            'economy' => 'mediocre',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '113',
            'y' => '59',
            'economy' => 'impoverished',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '32',
            'y' => '104',
            'economy' => 'mediocre',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '32',
            'y' => '119',
            'economy' => 'mediocre',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '29',
            'y' => '23',
            'economy' => 'upscale',
            'income' => '1200',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '39',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Freight Forwarding',
            'x' => '77',
            'y' => '26',
            'economy' => 'upscale',
            'income' => '1200',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '39',
        ]);
        //warehouse (128,64,64)
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '116',
            'y' => '56',
            'economy' => 'impoverished',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '116',
            'y' => '59',
            'economy' => 'impoverished',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '119',
            'y' => '56',
            'economy' => 'impoverished',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '119',
            'y' => '59',
            'economy' => 'impoverished',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '29',
            'y' => '101',
            'economy' => 'mediocre',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '32',
            'y' => '101',
            'economy' => 'mediocre',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '98',
            'y' => '119',
            'economy' => 'dilapidated',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '101',
            'y' => '119',
            'economy' => 'dilapidated',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '74',
            'y' => '86',
            'economy' => 'mediocre',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '3',
            'type' => '40',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Warehouse',
            'x' => '77',
            'y' => '86',
            'economy' => 'mediocre',
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
            'economy' => 'impoverished',
            'income' => '2000',
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
            'economy' => 'dilapidated',
            'income' => '2000',
            'building_size' => '5x2',
            'game' => '1',
            'hood' => '10',
            'type' => '42',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Western Railroad Station',
            'x' => '29',
            'y' => '95',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '5x2',
            'game' => '1',
            'hood' => '12',
            'type' => '42',
        ]);
        //bank small (194,182,130)
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '87',
            'y' => '74',
            'economy' => 'upscale',
            'income' => '2200',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '2',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '84',
            'y' => '35',
            'economy' => 'upscale',
            'income' => '2200',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '7',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '48',
            'y' => '35',
            'economy' => 'upscale',
            'income' => '2200',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '16',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '75',
            'y' => '101',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '14',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '108',
            'y' => '11',
            'economy' => 'rich',
            'income' => '2500',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '19',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '18',
            'y' => '86',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '11',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '48',
            'y' => '74',
            'economy' => 'dilapidated',
            'income' => '1600',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '4',
            'type' => '143',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '75',
            'y' => '8',
            'economy' => 'upscale',
            'income' => '2200',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '23',
            'type' => '143',
        ]);
        //bank (194,182,130)
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '104',
            'y' => '68',
            'economy' => 'opulent',
            'income' => '5000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '151',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Bank',
            'x' => '95',
            'y' => '71',
            'economy' => 'opulent',
            'income' => '5000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '151',
        ]);
        //department store junior (227,187,167)
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '96',
            'y' => '50',
            'economy' => 'impoverished',
            'income' => '1800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '1',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '99',
            'y' => '50',
            'economy' => 'impoverished',
            'income' => '1800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '1',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '66',
            'y' => '17',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '20',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '114',
            'y' => '11',
            'economy' => 'rich',
            'income' => '2400',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '19',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '75',
            'y' => '104',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '14',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '51',
            'y' => '59',
            'economy' => 'rich',
            'income' => '2400',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '9',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '60',
            'y' => '35',
            'economy' => 'impoverished',
            'income' => '1800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '22',
            'type' => '149',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '72',
            'y' => '80',
            'economy' => 'mediocre',
            'income' => '2000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '3',
            'type' => '149',
        ]);
        //department store mainline (227,187,167)
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '110',
            'y' => '68',
            'economy' => 'opulent',
            'income' => '6000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '152',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '107',
            'y' => '71',
            'economy' => 'opulent',
            'income' => '6000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '152',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '110',
            'y' => '74',
            'economy' => 'opulent',
            'income' => '6000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '152',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '83',
            'y' => '83',
            'economy' => 'upscale',
            'income' => '5000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '2',
            'type' => '152',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '116',
            'y' => '35',
            'economy' => 'upscale',
            'income' => '5000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '152',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Department Store',
            'x' => '95',
            'y' => '20',
            'economy' => 'rich',
            'income' => '5500',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '19',
            'type' => '152',
        ]);
        //hotel small (224,166,224)
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '54',
            'y' => '59',
            'economy' => 'rich',
            'income' => '1000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '9',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '57',
            'y' => '59',
            'economy' => 'rich',
            'income' => '1000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '9',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '27',
            'y' => '83',
            'economy' => 'mediocre',
            'income' => '800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '11',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '33',
            'y' => '83',
            'economy' => 'mediocre',
            'income' => '800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '11',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '84',
            'y' => '80',
            'economy' => 'upscale',
            'income' => '1000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '2',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '15',
            'y' => '104',
            'economy' => 'mediocre',
            'income' => '800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '12',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '21',
            'y' => '104',
            'economy' => 'mediocre',
            'income' => '800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '12',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '15',
            'y' => '101',
            'economy' => 'mediocre',
            'income' => '800',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '12',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '63',
            'y' => '32',
            'economy' => 'rich',
            'income' => '1000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '9',
            'type' => '141',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '63',
            'y' => '35',
            'economy' => 'rich',
            'income' => '1000',
            'building_size' => '1x2',
            'game' => '1',
            'hood' => '9',
            'type' => '141',
        ]);
        //hotel (224,166,224)
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '98',
            'y' => '68',
            'economy' => 'opulent',
            'income' => '2400',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '116',
            'y' => '77',
            'economy' => 'opulent',
            'income' => '2400',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '116',
            'y' => '80',
            'economy' => 'opulent',
            'income' => '2400',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '95',
            'y' => '83',
            'economy' => 'impoverished',
            'income' => '1200',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '6',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '101',
            'y' => '98',
            'economy' => 'dilapidated',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '23',
            'y' => '53',
            'economy' => 'upscale',
            'income' => '1800',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '15',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '26',
            'y' => '53',
            'economy' => 'upscale',
            'income' => '1800',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '15',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '59',
            'y' => '104',
            'economy' => 'dilapidated',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '13',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '116',
            'y' => '32',
            'economy' => 'upscale',
            'income' => '1800',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '153',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Hotel',
            'x' => '110',
            'y' => '14',
            'economy' => 'rich',
            'income' => '2000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '19',
            'type' => '153',
        ]);
        //movie theatre (224,166,224)
		DB::table('buildings')->insert([
			'building_name' => 'Logan Movie Theatre',
            'x' => '62',
            'y' => '20',
            'economy' => 'mediocre',
            'income' => '1000',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '20',
            'type' => '154',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Nightingale Movie Theatre',
            'x' => '107',
            'y' => '50',
            'economy' => 'impoverished',
            'income' => '800',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '154',
        ]);
        //newspaper (136,128,90)
		DB::table('buildings')->insert([
			'building_name' => 'Financial Times',
            'x' => '113',
            'y' => '65',
            'economy' => 'opulent',
            'income' => '1400',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Star Tribune',
            'x' => '110',
            'y' => '44',
            'economy' => 'upscale',
            'income' => '1200',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Morning Herald',
            'x' => '35',
            'y' => '23',
            'economy' => 'upscale',
            'income' => '1200',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '16',
            'type' => '155',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Daily Journal',
            'x' => '20',
            'y' => '71',
            'economy' => 'mediocre',
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
            'economy' => 'mediocre',
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
            'economy' => 'impoverished',
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
        //school (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '59',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '22',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '83',
            'y' => '8',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '23',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '59',
            'y' => '20',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '20',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '8',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '12',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '83',
            'y' => '110',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '14',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '86',
            'y' => '77',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '2',
            'type' => '159',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'School',
            'x' => '29',
            'y' => '80',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '11',
            'type' => '159',
        ]);
        //highschool (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '104',
            'y' => '74',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '160',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '107',
            'y' => '110',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '10',
            'type' => '160',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '77',
            'y' => '101',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '14',
            'type' => '160',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '110',
            'y' => '2',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '19',
            'type' => '160',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '20',
            'y' => '11',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '17',
            'type' => '160',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Highschool',
            'x' => '80',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '160',
        ]);
        //library (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Library',
            'x' => '110',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '183',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Library',
            'x' => '17',
            'y' => '11',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '17',
            'type' => '183',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Library',
            'x' => '53',
            'y' => '104',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '13',
            'type' => '183',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Library',
            'x' => '86',
            'y' => '83',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '2',
            'type' => '183',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Library',
            'x' => '98',
            'y' => '86',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '6',
            'type' => '183',
        ]);
        //post office (47,83,152)
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '98',
            'y' => '83',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '6',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '113',
            'y' => '47',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '80',
            'y' => '59',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '9',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '77',
            'y' => '29',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '80',
            'y' => '83',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '2',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '74',
            'y' => '98',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '14',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '20',
            'y' => '53',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '15',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '74',
            'y' => '5',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '23',
            'type' => '161',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Post Office',
            'x' => '110',
            'y' => '11',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '19',
            'type' => '161',
        ]);
        //telegraph office (47,83,152)
		DB::table('buildings')->insert([
			'building_name' => 'Telegraph Office',
            'x' => '98',
            'y' => '77',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '162',
        ]);
        //stock exchange (194,182,130)
		DB::table('buildings')->insert([
			'building_name' => 'Stock Exchange',
            'x' => '101',
            'y' => '77',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '163',
        ]);
        //labor exchange (194,182,130)
		DB::table('buildings')->insert([
			'building_name' => 'Labor Exchange',
            'x' => '101',
            'y' => '80',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '164',
        ]);
        //museum (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Museum of Contemporary Art',
            'x' => '113',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '165',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Field Museum',
            'x' => '119',
            'y' => '86',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '165',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'History Museum',
            'x' => '119',
            'y' => '26',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '8',
            'type' => '165',
        ]);
        //baths (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Baths',
            'x' => '104',
            'y' => '59',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '1',
            'type' => '166',
        ]);
        //opera (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Opera',
            'x' => '92',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '167',
        ]);
        //orchestra (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'Orchestra Hall',
            'x' => '107',
            'y' => '68',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '168',
        ]);
        //theatre (103,91,119)
		DB::table('buildings')->insert([
			'building_name' => 'City Theatre',
            'x' => '104',
            'y' => '65',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '5',
            'type' => '169',
        ]);
		DB::table('buildings')->insert([
			'building_name' => 'Den Theatre',
            'x' => '83',
            'y' => '38',
            'economy' => 'municipal',
            'income' => '0',
            'building_size' => '2x2',
            'game' => '1',
            'hood' => '7',
            'type' => '169',
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
