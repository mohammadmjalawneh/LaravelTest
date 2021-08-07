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
            $table->string('vindor_name_id');
            $table->string('');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('added_by')->references('admin_id')->on('admin');
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
