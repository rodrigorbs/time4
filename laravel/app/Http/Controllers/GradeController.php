<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
     public function index()
    {
    	return view('pages.grade.index');
    }

    public function formulario()
   {
     return view('pages.grade.formulario');
   }
}
