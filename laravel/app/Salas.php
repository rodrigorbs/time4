<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{


    protected $fillable = ['nomeSala', 'andar','capacidade','bloco_id'];
  
  public function bloco()
  {
      return $this->belongsTo('App\Blocos');
  }
}
