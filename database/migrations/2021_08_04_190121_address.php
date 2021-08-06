<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('cos_address_id');
            $table->unsignedBigInteger('cos_id');
            $table->string('country');
            $table->string('city');
            $table->string('Street_name');
            $table->string('x_coordinate');
            $table->string('y_coordinate');
            $table->timestamp('created_at')->useCurrent();
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('Address');
    }
}
