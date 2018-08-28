<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDrivers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_drivers', function (Blueprint $table) {
            $table->increments('dri_id')->length(8);
            $table->string('dri_name');
            $table->string('dri_fname');
            $table->string('dri_profile_pic');
            $table->string('dri_email')->nullable(); 
            $table->integer('dri_car_id')->default(0);  
            $table->string('dri_password');
            $table->integer('dri_mobile');
            $table->string('dri_address');
            $table->string('dri_birthday');
            $table->string('dri_gender');
            $table->integer('pub_status')->default(0);
            $table->string('dri_passport')->nullable();
            $table->string('dri_lisence');
            $table->integer('dri_nid');
            $table->integer('dri_role')->default(3);
            $table->string('dri_joining_date');
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
        Schema::dropIfExists('tbl_drivers');
    }
}
