<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;


class BlocoController extends Controller
{


  public function criar() {
      return view('criarBloco');
  }
}
