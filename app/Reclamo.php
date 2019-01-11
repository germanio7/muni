<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'direccion', 'foto', 'coordenadas', 'categoria_id', 'estado_id', 'user_id'];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'estado_id');
    }
}
