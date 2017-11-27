<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloco;
use App\Campus;
use App\Sala;
use Session;

class SalaController extends Controller
{
    public function index()
    {
      $salas = Sala::all();
      $blocos = Bloco::all(['id', 'nomeBlocos']);
      $campus = Campus::all(['id', 'nomeCampus']);

		return view('pages.sala.index', array('campus' => $campus, 'blocos' => $blocos, 'salas' => $salas));
    }

    public function formulario()
    {
      $campus = Campus::all();

		return view('pages.sala.formulario', array('campus' => $campus));
    }
    public function formularioSala(Request $request)
    {
      $salas = Sala::all();
      $blocos = Bloco::all();
      $campus = Campus::find($request->input('selecaoCampus'));

		return view('pages.sala.criar', array('campus' => $campus, 'blocos' => $blocos, 'salas' => $salas));
    }


    public function store($id, Request $request, Sala $sala){
      $this->validate($request,[
            'nomeSalas' => 'required|min:3',
            'andar' => 'required|numeric|max:10',
            'capacidade' => 'required|numeric|min:10|max:150',
      ]);

      if($request->has('id')){
        $sala = Sala::find($request->id);
      }

        $sala->blocos_idCampus = $id;
        $sala->blocos_idBlocos = $request->input('selecaoBlocos');
        $sala->nomeSalas = $request->input('nomeSalas');
        $sala->andar = $request->input('andar');
        $sala->capacidade = $request->input('capacidade');
        if($sala->save()){
         Session::flash('mensagem', '<script> alert("Concluído!!! Sala Cadastrada com sucesso!!!")</script>');
                            return redirect('sala');
              }
        }

public function edit($id, Sala $sala)
          {

        $blocos = Bloco::all();
        $campus = Campus::all();
        $sala = Sala::find($id);
      	return view('pages.sala.editar', array('sala' => $sala, 'blocos' => $blocos, 'campus' => $campus));
            }

public function update($id, Request $request)
          {

        $sala = Sala::find($id);
        $sala->blocos_idBlocos = $request->input('selecaoBlocos');
        $sala->nomeSalas = $request->input('nomeSalas');
        $sala->andar = $request->input('andar');
        $sala->capacidade = $request->input('capacidade');
          if($sala->save()){
                   Session::flash('msg', '<script> alert("Sala Atualizada!!!")</script>');
                    return redirect('sala');
                                  }

                          }

public function del($id, Sala $sala)
        {
        $blocos = Bloco::all();
        $campus = Campus::all();
        $sala = Sala::find($id);
      	return view('pages.sala.excluir', array('sala' => $sala, 'blocos' => $blocos, 'campus' => $campus));
          }


public function destroy($id, Sala $sala)
        {
        $sala = Sala::find($id);
        $sala->delete();
            Session::flash('delMsg', '<script> alert("Sala Excluída!!!")</script>');
          return redirect('sala');
        }



}
