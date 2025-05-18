<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function experiences()
    {
        return $this->belongsToMany(Experience::class, 'expirience_technologies');
    }
}
