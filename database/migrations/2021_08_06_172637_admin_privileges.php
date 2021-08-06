<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminPrivileges extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('Admin_Privileges', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_id');
            $table->string('admin_privileges_id');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('admin_id')->references('admin_id')->on('admin');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        //
    }
}
