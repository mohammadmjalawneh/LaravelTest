<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VindorName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vindor_name', function (Blueprint $table) {
            $table->bigIncrements('vindor_name_id');
            $table->string('vindor_first_name');
            $table->string('vindor_mid_name');
            $table->string('vindor_last_name');
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
        Schema::dropIfExists('vindor_name');
    }
}
