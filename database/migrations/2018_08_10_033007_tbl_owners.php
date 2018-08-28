<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOwners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdc_owners', function (Blueprint $table) {
            $table->increments('won_id');
            $table->string('won_name');
            $table->string('won_fname');
            $table->string('won_profile_pic');
            $table->string('won_email'); 
            $table->integer('won_car_id')->nullable(); 
            $table->integer('won_driver_id')->nullable();
            $table->string('won_password');
            $table->integer('won_mobile');
            $table->text('won_address');
            $table->string('won_birthday');
            $table->string('won_gender');
            $table->integer('pub_status')->default(0);
            $table->string('won_passport')->nullable();
            $table->string('won_lisence')->nullable();
            $table->integer('won_nid');
            $table->integer('won_role')->default(2);
            $table->string('won_joining_date'); 
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
        Schema::dropIfExists('tbl_owners');
    }
}
