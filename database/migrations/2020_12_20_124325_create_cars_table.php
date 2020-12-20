<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('car_id');
            //data
            $table->integer('state')->default(100);
            $table->integer('x')->default(1);
            $table->integer('y')->default(1);
            //fk
            $table->unsignedBigInteger('game');	
            $table->unsignedBigInteger('gang');	
            $table->unsignedBigInteger('type');	
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
        Schema::dropIfExists('cars');
    }
}
