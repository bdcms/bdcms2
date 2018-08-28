<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_users', function (Blueprint $table) {
            $table->increments('user_id'); 
            $table->string('user_name'); 
            $table->string('user_fname');  
            $table->integer('user_nid');   
            $table->string('user_picture');
            $table->string('user_email')->nullable();  
            $table->string('user_password');
            $table->integer('user_mobile');
            $table->string('user_address');
            $table->string('user_birthday');
            $table->string('user_gender');
            $table->integer('pub_status')->default(0); 
            $table->integer('user_rol');
            $table->string('user_joining_date');
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
        Schema::dropIfExists('tbl_users');
    }
}
