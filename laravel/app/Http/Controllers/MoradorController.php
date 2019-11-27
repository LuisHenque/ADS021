<?php

namespace App\Http\Controllers;

use App\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }

    public function listar(){
        return view('morador.listar', ['moradores' => Morador::all()]);
//        return view('morador.listar', ['moradores' => Morador::paginate(5)]);

    }//fim do listar

    public function criar(){
        return view('morador.criar');
    }//fim do criar

    public function editar($id){
        $morador = Morador::find($id);
        return view('morador.editar', compact('morador'));

    }//fim do editar

    public function remover($id){
        $morador = Morador::find($id);
        $morador->delete();
        return redirect('morador/listar');
    }//fim do remover

    public function salvar (Request $request){
        $morador = new Morador();

        if ($request->has('id')){
            $morador = Morador::find($request->id);
        }//fim do IF

//        $morador->id = $request->id;
        $morador->nome = $request->nome;
        $morador->cpf = $request->cpf;
        $morador->email = $request->email;
        $morador->telefone = $request->telefone;
        $morador->placa = $request->placa;
        $morador->veiculo = $request->veiculo;
        $morador->situacao = $request->situacao;
        $morador->save();
        return redirect('morador/listar');

    }//fim do salvar

}//MoradorController
