<?php

namespace App;
use App\Episode;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
