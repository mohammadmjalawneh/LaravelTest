<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->unsignedBigInteger('customer_name_id');
            $table->string('email');
            $table->string('password');
            $table->string('phone_country_code');
            $table->string('phone_local_name');
            $table->unsignedBigInteger('cos_address_id');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('customer_name_id')->references('customer_name_id')->on('customer_name');
            $table->foreign('cos_address_id')->references('cos_address_id')->on('address');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
