<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoods', function (Blueprint $table) {
            //increment id
            $table->bigIncrements('hood_id');
            //data
            $table->string('hood_name');
            $table->string('hood_type');
            //fk
			$table->unsignedBigInteger('game')->default(1);	
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
        Schema::dropIfExists('hoods');
    }
}
