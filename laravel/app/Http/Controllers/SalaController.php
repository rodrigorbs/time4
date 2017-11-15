<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index()
    {
		return view('pages.sala.index');
    }

    public function formulario()
    {
		return view('pages.sala.formulario');
    }
}
