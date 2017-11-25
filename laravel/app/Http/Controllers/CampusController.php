<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use App\Http\Requests\CampusRequest;

class CampusController extends Controller
{
  public function index()
    {
		return view('pages.campus.index', ['campuses' => Campus::all()]);
    }

    public function formulario()
      {
  		return view('pages.campus.formulario');
      }

      public function salvar(CampusRequest $request)
      {
        $campus = new Campus();

        if ($request->has('idCampus')) {
           $campus = Campus::findOrFail($request->idCampus);
        }

        $campus->nomeCampus = $request->nomeCampus;
        $campus->logradouro = $request->logradouro;
        $campus->cidade = $request->cidade;
        $campus->cep = $request->cep;
        $campus->uf = $request->uf;
        $campus->telefone = $request->telefone;
        $campus->save();
        return redirect('/campus');
      }

      public function editar($id) {
        return view('pages.campus.editar', ['campus' => Campus::find($id)]);
      }

      public function remover($id) {
        $campus = Campus::find($id);
        $campus->delete();
        return redirect('/campus');
      }

}
