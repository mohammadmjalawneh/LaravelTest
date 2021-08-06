<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductImg extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('product_img', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->string('product_img_URL',300);
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('product_id')->references('product_id')->on('product');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('product_img');
    }
}
