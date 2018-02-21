<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function hallmap()
    {
        return $this->hasOne('App\Hallmap');
    }
}
