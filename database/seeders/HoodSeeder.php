<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //game 1

        //economy:
        //dilapidated 3
        //impoverished 3
        //mediocre 7
        //upscale 7
        //rich 3
        //opulent 1

        //1.
        DB::table('gangs')->insert([
            'hood_name' => 'Streeterville',
            'hood_type' => 'impoverished',
            'game' => '1'
        ]);
        //2.
        DB::table('gangs')->insert([
            'hood_name' => 'Little Village',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //3.
        DB::table('gangs')->insert([
            'hood_name' => 'Cicero',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //4.
        DB::table('gangs')->insert([
            'hood_name' => 'Berwyn',
            'hood_type' => 'dilapidated',
            'game' => '1'
        ]);
        //5.
        DB::table('gangs')->insert([
            'hood_name' => 'Loop',
            'hood_type' => 'opulent',
            'game' => '1'
        ]);
        //6.
        DB::table('gangs')->insert([
            'hood_name' => 'Chinatown',
            'hood_type' => 'impoverished',
            'game' => '1'
        ]);
        //7.
        DB::table('gangs')->insert([
            'hood_name' => 'Humboldt Park',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //8.
        DB::table('gangs')->insert([
            'hood_name' => 'Lincoln Park',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //9.
        DB::table('gangs')->insert([
            'hood_name' => 'Garfield Park',
            'hood_type' => 'rich',
            'game' => '1'
        ]);
        //10.
        DB::table('gangs')->insert([
            'hood_name' => 'Bronzeville',
            'hood_type' => 'dilapidated',
            'game' => '1'
        ]);
        //11.
        DB::table('gangs')->insert([
            'hood_name' => 'Brookfield',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //12.
        DB::table('gangs')->insert([
            'hood_name' => 'Broadview',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //13.
        DB::table('gangs')->insert([
            'hood_name' => 'Stickney',
            'hood_type' => 'dilapidated',
            'game' => '1'
        ]);
        //14.
        DB::table('gangs')->insert([
            'hood_name' => 'Englewood',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //15.
        DB::table('gangs')->insert([
            'hood_name' => 'Elmwood',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //16
        DB::table('gangs')->insert([
            'hood_name' => 'Belmont',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //17.
        DB::table('gangs')->insert([
            'hood_name' => 'Dunning',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //18.
        DB::table('gangs')->insert([
            'hood_name' => 'Berkeley',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //19.
        DB::table('gangs')->insert([
            'hood_name' => 'Lake View',
            'hood_type' => 'rich',
            'game' => '1'
        ]);
        //20.
        DB::table('gangs')->insert([
            'hood_name' => 'Bucktown',
            'hood_type' => 'mediocre',
            'game' => '1'
        ]);
        //21.
        DB::table('gangs')->insert([
            'hood_name' => 'Elmhurst',
            'hood_type' => 'rich',
            'game' => '1'
        ]);
        //22.
        DB::table('gangs')->insert([
            'hood_name' => 'Cragin',
            'hood_type' => 'impoverished',
            'game' => '1'
        ]);
        //23.
        DB::table('gangs')->insert([
            'hood_name' => 'Avondale',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
        //24.
        DB::table('gangs')->insert([
            'hood_name' => 'Maywood',
            'hood_type' => 'upscale',
            'game' => '1'
        ]);
    }
}
