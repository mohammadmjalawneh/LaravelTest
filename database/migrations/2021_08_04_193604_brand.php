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
            $table->id('brand_id');
            $table->string('brand_name',100);
            $table->string('brand_img',100);
            $table->boolean('brand_sta');
            $table->index('bigcat_id');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('bigcat_id')->references('bigcat_id')->on('bigcat')->onDelete('cascade');
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
