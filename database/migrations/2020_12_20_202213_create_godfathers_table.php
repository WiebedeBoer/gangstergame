<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodfathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godfathers', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('godfather_id');
            //data
            $table->string('category')->default('boss'); //boss, underboss, advisor, accountant, lawyer, captain, soldier, associate
            //fk
            $table->unsignedBigInteger('game')->nullable();	
            $table->unsignedBigInteger('gang')->nullable();	
            $table->unsignedBigInteger('gangster')->nullable();		
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
        Schema::dropIfExists('godfathers');
    }
}
