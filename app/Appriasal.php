<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appriasal extends Model
{
    public function scopeCurrentUser($query)
    {
        return $query->where('appriaser', Auth::user()->id);
    }
}
