<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
  public function children() 
  {
    return $this->hasMany('App\Children');
  }
}
