<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSergeants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_sergeants', function (Blueprint $table) { 
            $table->increments('ser_id',8);
            $table->string('ser_name'); 
            $table->string('ser_identity');
            $table->string('ser_working_area');
            $table->string('ser_profile_pic');
            $table->string('ser_email')->nullable();  
            $table->string('ser_password');
            $table->integer('ser_mobile');
            $table->string('ser_address');
            $table->string('ser_birthday');
            $table->string('ser_gender');
            $table->integer('pub_status')->default(0); 
            $table->integer('ser_nid');
            $table->integer('ser_role')->default(6);
            $table->string('ser_joining_date');
            $table->string('remember_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_sergeants');
    }
}
