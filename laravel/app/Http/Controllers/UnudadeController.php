<?php

namespace App\Http\Controllers;

use App\Unidade;
use Illuminate\Http\Request;

class UnudadeController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }

    public function listar(){
        return view('unidade.listar', ['unidades' => Unidade::all()]);

    }//fim do listar

    public function criar(){
        return view('unidade.criar');
    }//fim do criar

    public function editar($id){
        $unidade = Unidade::find($id);
        return view('unidade.editar', compact('unidade'));

    }//fim do editar

    public function remover($id){
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }//fim do remover

    public function salvar (Request $request){
        $unidade = new Unidade();

        if ($request->has('id')){
            $unidade = Unidade::find($request->id);
        }//fim do IF

//        $unidade->id = $request->id;
        $unidade->nome = $request->nome;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->placa = $request->placa;
        $unidade->veiculo = $request->veiculo;
        $unidade->situacao = $request->situacao;
        $unidade->save();
        return redirect('unidade/listar');

    }//fim do salvar
}
