<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('building_id');
            //data
            $table->string('building_name')->nullable();
            //purposes
            $table->string('front')->nullable(); //numbers racket, casino, moonshine still, speakeasy, brothel, counterfeit press, loanshark, teamsters
            $table->string('equipment')->nullable(); //gun, car
            $table->string('labour')->nullable(); //gangsters, accountants, lawyers
            $table->integer('state')->default(100);
            //economy
            $table->string('economy')->default('normalcy');
            $table->integer('income')->default(250);
            //size
            $table->string('building_size')->default('1x1'); //1x1, 2x2, 1x2, 2x5, 5x5
            //fk
            $table->unsignedBigInteger('game')->default(1);	
            $table->unsignedBigInteger('hood')->default(1);	
            $table->unsignedBigInteger('type')->default(1);	
            $table->unsignedBigInteger('owner')->nullable();	
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
        Schema::dropIfExists('buildings');
    }
}
