<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = ['name','description','category','user','device',];
	

    public function status()
    {
    	return $this->belongsTo('App\Status', 'status_id');
    }
}
