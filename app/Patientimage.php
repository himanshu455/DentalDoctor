<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientimage extends Model
{
     public function userimage() {

     		return $this->belongsTo('App\User');
     }
}
