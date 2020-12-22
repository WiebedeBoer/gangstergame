<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        //foreign keys
        $this->call(ForeignKeySeeder::class);

        //admin user
        $this->call(UserSeeder::class);
        
        //types
        $this->call(BuildingTypeSeeder::class);
        $this->call(EquipmentTypeSeeder::class);
        $this->call(CarTypeSeeder::class);

        //defaults
        $this->call(GameSeeder::class);
        $this->call(HoodSeeder::class);
        $this->call(BuildingSeeder::class);
    }
}


