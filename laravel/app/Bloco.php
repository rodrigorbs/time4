<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    //
    protected $fillable = [
        'nameBlocos', 'qtdAndares', 'campus_idCampus',
    ];
}
