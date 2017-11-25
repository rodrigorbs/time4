<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocos extends Model
{
    protected $fillable = ['nomeBloco', 'qtdAndares','campus_id'];


    public function campus()
    {
        return $this->belongsTo('App\Campus');
    }
}
