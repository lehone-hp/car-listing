<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleContact extends Model {

    public function vehicle() {
        return $this->belongsTo('App\Vehicle');
    }
}
