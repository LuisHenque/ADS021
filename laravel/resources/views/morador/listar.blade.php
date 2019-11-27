@extends('layouts.condominio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #98cbe8; color: #9b8a30"  ><strong><h2>Lista de Moradores</h2></strong></div>
                    <div class="panel-body">
                    <div class="col-md-12">
                        <a href="/morador/criar" class="btn btn-success">Adicionar</a>
                        <br><br>
{{--                        <table class="table table-striped table-hover table-bordered">--}}
                        <table class="table table-striped table-hover table-bordered datatable">
{{--                        <table class="table">--}}
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Placa</th>
                                <th>Veiculo</th>
                                <th>Situação</th>
                                <th>Unidade</th>
                                <th>Condominio</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($moradores as $morador)
                                <tr>
                                    <td>{{$morador->nome}}</td>
                                    <td>{{$morador->cpf}}</td>
                                    <td>{{$morador->email}}</td>
                                    <td>{{$morador->telefone}}</td>
                                    <td>{{$morador->placa}}</td>
                                    <td>{{$morador->veiculo}}</td>
                                    <td>{{$morador->situacao}}</td>
                                    <td>{{$morador->unidade_id}}</td>
                                    <td>{{$morador->condominio_id}}</td>
                                    <td>
                                        <a href="{{ url('morador/'.$morador->id.'/editar') }}" class="btn btn-primary">
{{--                                        <a href="/morador/editar/{{$morador->id}}">--}}
                                            Editar</a>
                                        <a href="{{ url('morador/'.$morador->id.'/remover') }}" class="btn btn-danger" onclick="return confirm('Deseja remover morador?')">Remover</a>
                                    </td>
{{--                                    <td>--}}
{{--                                        @if($curso->arquivo)--}}
{{--                                            <img width="100px" src="{{url('storage/' . $curso->arquivo)}}">--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
