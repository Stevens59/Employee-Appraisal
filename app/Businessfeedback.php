<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Businessfeedback extends Model
{
    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no nominator has been assigned, assign the current user's id as the nominator
        if (!$this->nominator && Auth::user()) {
            $this->nominator = Auth::user()->getKey();
        }

        parent::save();
    } 

    public function scopeCurrentUser($query)
    {
        return $query->where('nominator', Auth::user()->id);
    }
    
}
