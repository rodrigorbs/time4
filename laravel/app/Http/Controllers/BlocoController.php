<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
class BlocoController extends Controller
{
    public function index()
    {
    	return view('pages.bloco.index');
    }

    public function formulario()
    {
      $campus = Campus::all();
    	return view('pages.bloco.create', array('campus' => $campus));
    }
    public function store(Request $request){
      $bloco = new Bloco();
      $bloco->nameBlocos = $request->input('nameBlocos');
      $bloco->qtdAndares = $request->input('qtdAndares');
      $bloco->campus_idCampus = $request->input('campus_idCampus');
        if($bloco->save()){
          return redirect('bloco');
        }
    }
}
