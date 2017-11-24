<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
  protected $fillable = ['nomeDisciplina', 'curso_id'];

  public function curso()
  {
      return $this->belongsTo('App\Cursos');
  }
}
