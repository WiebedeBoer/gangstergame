<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('newspaper_id');
            //data
            $table->string('news_title');
            $table->text('news_text');
            //fk
            $table->unsignedBigInteger('game')->nullable();	
            $table->unsignedBigInteger('gang')->nullable();	
            $table->unsignedBigInteger('user')->nullable();		
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
        Schema::dropIfExists('newspapers');
    }
}
