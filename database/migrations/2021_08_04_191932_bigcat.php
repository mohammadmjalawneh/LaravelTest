<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class bigcat extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('big_cat', function (Blueprint $table) {
            $table->bigIncrements('big_cat_id',10);
            $table->string('big_cat_name',100);
            $table->string('big_cat_code',50);
            $table->string('big_cat_img_URL',300);
            $table->boolean('big_cat_sta');
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
        Schema::dropIfExists('big_cat');
    }
}
