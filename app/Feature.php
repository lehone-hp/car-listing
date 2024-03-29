<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function vehicles() {
        return $this->belongsToMany('App\Vehicle');
    }
}
