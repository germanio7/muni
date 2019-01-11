<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['estado'];

    public function reclamos()
    {
        return $this->hasMany('App\Reclamo');
    }
}
