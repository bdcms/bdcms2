<?php

use Faker\Generator as Faker;

$factory->define(App\cars::class, function (Faker $faker) {
    return [
        //
        'carname_id' =>$faker->numberBeTween($min=1, $max=50),
        'car_wheel' =>$faker->numberBeTween($min=2, $max=16),
       	'car_chasis'=>$faker->number($maxNbChars = 8),
        'car_metro' =>$faker->numberBeTween($min=1, $max=30),
        'car_reg_num' =>$faker->numberBeTween($min=2, $max=16),
        'car_reg_date' =>$faker->date('M-D-Y', $unixTimestamp),
        'car_insurence'=>$faker->number($maxNbChars = 8),
        'car_road_permit_no'=>$faker->number($maxNbChars = 8),
        'car_engine_num'=>$faker->number($maxNbChars = 8),
        'driver_id' =>$faker->numberBeTween($min=1, $max=30),
        'owner_id' =>$faker->numberBeTween($min=1, $max=30),
        'car_document_pdf'=>$faker->text($maxNbChars = 8) ,
        'car_color' =>$faker->text($maxNbChars = 8),
        'car_pic' =>$faker->text($maxNbChars = 8)
    ];
});
