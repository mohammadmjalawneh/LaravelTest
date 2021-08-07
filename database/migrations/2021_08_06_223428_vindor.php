<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vindor extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('vindor', function (Blueprint $table) {
            $table->bigIncrements('vindor_id');
            $table->unsignedBigInteger('added_by');
            $table->unsignedBigInteger('vindor_name_id');
            $table->unsignedBigInteger('big_cat_id');
            $table->string('vindor_email');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('added_by')->references('admin_id')->on('admin');
            $table->foreign('vindor_name_id')->references('vindor_name_id')->on('vindor_name');
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
        Schema::dropIfExists('vindor');
    }
}
