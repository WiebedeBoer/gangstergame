<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //gang
        DB::table('gangs')->insert([
            'gang_name' => 'Outfit',
            'money' => '10000',
            'state' => 'normalcy',
            'game' => '1',
            'user' => '1',
        ]);
    }
}
