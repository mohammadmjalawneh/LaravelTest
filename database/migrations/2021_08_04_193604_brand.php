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
            $table->bigIncrements('brand_id',10);
            $table->string('brand_name',100);
            $table->string('brand_img',100);
            $table->boolean('brand_sta');
            $table->integer('big_cat_id',10);
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('big_cat_id')->references('bigcat_id')->on('bigcat');
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
