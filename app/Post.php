<?php

namespace App;


class post extends Model
{

    public function user()
    {
    	return $this->belongsTo(user::class);
    }
    
}
