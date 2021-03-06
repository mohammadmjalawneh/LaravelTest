<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_code',50);
            $table->string('product_description');
            $table->integer('product_quantity');
            $table->double('product_price',8,6);    
            $table->unsignedBigInteger('big_cat_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('brand_id');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('big_cat_id')->references('big_cat_id')->on('big_cat');
            $table->foreign('subcategory_id')->references('subcategory_id')->on('subcategory');
            $table->foreign('brand_id')->references('brand_id')->on('brand');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
