<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Brand extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->bigIncrements('brand_id');
            $table->string('brand_name',100);
            $table->string('brand_img',200);
            $table->boolean('brand_sta');
            $table->unsignedBigInteger('big_cat_id');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('big_cat_id')->references('big_cat_id')->on('big_cat');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('brand');
    }
}
