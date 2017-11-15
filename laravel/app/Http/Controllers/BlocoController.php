<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlocoController extends Controller
{
    public function index()
    {
    	return view('pages.bloco.index');
    }

    public function formulario()
    {
    	return view('pages.bloco.formulario');
    }
}
