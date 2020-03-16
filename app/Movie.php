<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;
use App\Genre;
class Movie extends Model
{
    //
    public function actor(){
        return $this->belongsToMany(Actor::class);
    }
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
