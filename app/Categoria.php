<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function reclamos()
    {
        return $this->hasMany('App\Reclamo');
    }
}
