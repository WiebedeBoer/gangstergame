<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGangstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangsters', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('gangster_id');
            //data
            $table->string('gangster_name');
            $table->integer('health')->default(100);
            $table->string('state')->default('normalcy');
            $table->string('specialty')->default('none');
            //management statistics
            $table->integer('intelligence')->default(1);
            $table->integer('organization')->default(1);
            $table->integer('tactics')->default(1); 
            //development statistics
            $table->integer('recruiting')->default(1);
            $table->integer('intimidation')->default(1); 
            $table->integer('business')->default(1);  
            //combat proficiencies
            $table->integer('strength')->default(1);
            $table->integer('brawn')->default(1);
            $table->integer('agility')->default(1);
            //weapon proficiencies 
            $table->integer('firearms')->default(1);
            $table->integer('knives')->default(1);
            $table->integer('fists')->default(1);
            $table->integer('explosives')->default(1);
            $table->integer('arson')->default(1);
            //logistical proficiencies
            $table->integer('raiding')->default(1);  
            $table->integer('tracking')->default(1); 
            $table->integer('driving')->default(1); 
            //fk
            $table->unsignedBigInteger('game')->default(1);	
            $table->unsignedBigInteger('gang')->default(1);	
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
        Schema::dropIfExists('gangsters');
    }
}
