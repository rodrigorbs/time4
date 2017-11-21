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
      $bloco = new Bloco();
    	return view('pages.bloco.create', array('campus' => $campus));
    }

    public function store(Request $request){
      $bloco = new Bloco();
      if($request->has('idBlocos')){
        $aluno =Aluno::find($request->id);
      }
        $bloco->nameBlocos = $request->input('nameBlocos');
        $bloco->qtdAndares = $request->input('qtdAndares');
        if($bloco->save()){
          $request->session()->flash('Concluído!!!', 'Bloco Cadastrado!!');
                            return redirect('bloco');
              }
        }
}
