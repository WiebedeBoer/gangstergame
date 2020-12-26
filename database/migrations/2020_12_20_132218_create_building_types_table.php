<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_types', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('type_id');
            //data
            $table->string('building_name');
            $table->string('category')->default('commercial'); //commercial, tenement, residential, industrial, municipal, police, prison, gun, car, city hall, charity, media
            $table->string('building_size')->default('1x1'); //1x1, 2x2, 1x2, 2x5, 5x2, 5x5
            $table->string('front')->default('none'); //numbers racket, casino, moonshine still, speakeasy, brothel, counterfeit press, loanshark, teamsters
            $table->string('labour')->default('none'); //gangsters, accountants, lawyers
            $table->string('equipment')->default('none'); //gun, car
            //timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_types');
    }
}
