<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    public function item(){
        return $this->belongsToMany('App\Models\flavor');
    }
}
