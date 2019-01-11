<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['reclamo_id', 'comentario'];

    public function reclamo()
    {
    	return $this->belongsTo('App\Reclamo', 'reclamo_id');
    }
}
