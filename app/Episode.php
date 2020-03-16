<?php

namespace App;

use App\Season;

use Illuminate\Database\Eloquent\Model;


class Episode extends Model
{

    public function season()
    {
        return $this->BelongsTo(Season::class);
    }
    public function actors()
    {
        return $this->BelongsTo(Actor::class);
    }
}
