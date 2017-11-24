<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotas extends Model
{
    protected $fillable = ['origem', 'orientacao','sala_id'];

    public function sala()
    {
        return $this->belongsTo('App\Salas');
    }
}
