<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('gang_id');
            //data
            $table->string('gang_name');
            $table->integer('money')->default(10000);
            $table->string('state')->default('normalcy');
            //fk
            $table->unsignedBigInteger('game')->default(1);	
            $table->unsignedBigInteger('user')->default(1);	
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
        Schema::dropIfExists('gangs');
    }
}
