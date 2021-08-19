<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subcategory extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()           
    {
        Schema::create('Subcategory', function (Blueprint $table) {
            $table->bigIncrements('subcategory_id');
            $table->string('subcategory_name');
            $table->string('subcategory_code',50);
            $table->boolean('subcategory_statuse');
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
        Schema::dropIfExists('Subcategory');
    }
}
