<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class Employee extends Model
{
    protected $guarded = [];

    public function scopeCurrentUser($query)
    {
        return $query->where('employee', Auth::user()->email)
                    ->orWhere('appriaser', Auth::user()->email);
    }
}
