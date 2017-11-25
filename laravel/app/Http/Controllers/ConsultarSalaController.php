<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultarSalaController extends Controller
{
  public function index()
  {
    return view('pages.pesquisarSala.index');
  }
}
