<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blocos;
use App\Campus;
use App\Http\Requests\BlocoRequest;

class BlocoController extends Controller
{
    public function index()
    {
    	return view('pages.bloco.index',['blocos' => Blocos::all()]);
    }

    public function formulario()
    {
    	return view('pages.bloco.formulario',['campuses' => Campus::all()]);
    }

    public function salvar(BlocoRequest $request)
    {
      $bloco = new Blocos();


      if ($request->has('id')) {
         $bloco = Blocos::findOrFail($request->id);
      }

      $bloco->nomeBloco = $request->nomeBloco;
      $bloco->qtdAndares = $request->qtdAndares;
      $bloco->campus_id = $request->campus_id;
      $bloco->save();
      return redirect('/bloco');
    }

    public function editar($id) {
      return view('pages.bloco.editar', ['bloco' => Blocos::find($id)], ['campuses' => Campus::all()]);
    }

    public function remover($id) {
      $bloco = Blocos::find($id);
      $bloco->delete();
      return redirect('/bloco');
    }
}
