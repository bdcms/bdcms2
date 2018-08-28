<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUpazilaAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_upazila_admin', function (Blueprint $table) {
            $table->increments('uzl_id'); 
            $table->string('uzl_name'); 
            $table->string('uzl_fname');  
            $table->integer('uzl_nid');  
            $table->string('uzl_working_area');
            $table->string('uzl_picture');
            $table->string('uzl_email')->nullable();  
            $table->string('uzl_password');
            $table->integer('uzl_mobile');
            $table->string('uzl_address');
            $table->string('uzl_birthday');
            $table->string('uzl_gender');
            $table->integer('pub_status')->default(0); 
            $table->integer('uzl_rol')->default(5);
            $table->string('uzl_joining_date');
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
        Schema::dropIfExists('tbl_upazila_admin');
    }
}
