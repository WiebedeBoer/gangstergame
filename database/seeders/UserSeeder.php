<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //gang
        DB::table('users')->insert([
            'name' => 'Wiebe',
            'email' => 'wiebe81@gmail.com',
            'password' => '$2y$10$nkeJQ8lAL6l3e8ld.WcQwOGlvYuftMNHwgw7NRk.Gw1fR0vjOYvGu'
        ]);
    }
}
