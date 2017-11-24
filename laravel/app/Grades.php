<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $fillable = ['semestre', 'semana','turno','sala_id','curso_id','bloco_id','campus_id'];

    public function bloco()
    {
        return $this->belongsTo('App\Blocos');
    }
}
