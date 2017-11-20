<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
class CampusController extends Controller
{
  public function index()
    {
		return view('pages.campus.index');
    }

    public function formulario()
      {
  		return view('pages.campus.formulario', array('campus' => $ncampus));
      }

}
