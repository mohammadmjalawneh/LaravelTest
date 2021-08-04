<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bigcat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bigcat', function (Blueprint $table) {
            $table->id('bigcat_id');
            $table->string('bigcat_name',100);
            $table->string('bigcat_img',100);
            $table->boolean('bigcat_sta');
            $table->timestamps('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
