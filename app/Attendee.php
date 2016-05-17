<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
  public function children() 
  {
    return $this->hasMany('App\Children');
  }

  public function childrenWaitingList() 
  {
    return $this->hasMany('App\Children')->where('waiting_list', '=', true);
  }
}
