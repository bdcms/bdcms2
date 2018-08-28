<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblZillaAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_zilla_admins', function (Blueprint $table) {
            $table->increments('zil_id');
            $table->string('zil_name'); 
            $table->string('zil_fname');  
            $table->integer('zil_nid');  
            $table->string('zil_working_area');
            $table->string('zil_picture');
            $table->string('zil_email')->nullable();  
            $table->string('zil_password');
            $table->integer('zil_mobile');
            $table->string('zil_address');
            $table->string('zil_birthday');
            $table->string('zil_gender');
            $table->integer('pub_status')->default(0); 
            $table->integer('zil_rol')->default(4);
            $table->string('zil_joining_date');
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
        Schema::dropIfExists('tbl_zilla_admins');
    }
}
