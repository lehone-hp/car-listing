<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function photos() {
        return $this->hasMany('App\VehiclePhoto');
    }

    public function photo() {
        return $this->hasOne('App\VehiclePhoto');
    }

    public function fuelType() {
        return $this->belongsTo('App\FuelType');
    }

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function features() {
        return $this->belongsToMany('App\Feature');
    }

    public function contacts() {
        return $this->hasMany('App\VehicleContact');
    }

}
