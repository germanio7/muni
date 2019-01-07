<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'direccion', 'foto', 'coordenadas', 'categoria_id', 'estado_id', 'user_id'];
}
