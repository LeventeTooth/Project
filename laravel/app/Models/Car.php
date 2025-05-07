<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'license_plate',
        'model',
        'price',
        'power',
        'img'
    ];

    public function HasAvailableTimeForRent($event_id){
        $rents = Rent::all();
        $reserved_times = [];
        foreach($rents as $rent){
            if($rent->event_id == $event_id && $rent->car_id == $this->id){
                array_push($reserved_times, $rent->rent_time);
            }
        }
        if(count($reserved_times) == 10){
            return false;
        }
        else{
            return true;
        }
    }

    public function IsRentTimeFree($event_id, $rent_time){
        $rents = Rent::all();
        foreach($rents as $rent){
            if($rent->event_id == $event_id && $rent->car_id == $this->id && $rent->rent_time == $rent_time){
                return false;
            }
        }
        return true;
    }
}
