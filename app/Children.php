<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $table = 'children';
	
	/**
	 * A children belongs to an Attendee
	 */
	public function mother() 
	{
		return $this->belongsTo('App\Attendee');
	}
}
