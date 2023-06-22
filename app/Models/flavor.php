<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flavor extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Models\item');
    }
}
