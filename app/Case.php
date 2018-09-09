<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
class Case extends Model
{
    protected $fillable = [
        'car_id', 'driver_id', 'owner_id','complainant_id', 'withdraw_id', 'case_area', 'case_status'
    ];




   
}
