<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('admin_id');
            $table->string('admin_first_name');
            $table->string('admin_mid_name');
            $table->string('admin_last_name');
            $table->string('admin_email');
            $table->string('admin_password');
            $table->string('admin_img_URL');
            $table->string('admin_country_code');
            $table->string('admin_phone');            
            $table->string('admin_address');            
            $table->boolean('admin_statuse');    
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
        Schema::dropIfExists('admin');
    }
}
