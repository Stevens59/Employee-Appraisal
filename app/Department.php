<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function scopeCurrentUser($query)
    {
        return $query->where('nominator', Auth::user()->id);
    }
   
}
