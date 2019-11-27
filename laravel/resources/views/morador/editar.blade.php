@extends('layouts.condominio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
{{--                    <div class="panel-heading">Cadastrar Moradores</div>--}}
                    <div class="panel-heading" style="background-color: #98cbe8; color: #9b8a30"  ><strong><h4>Cadastrar Morador</h4></strong></div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach($errors-all() as $error)
                                    <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{url('morador/salvar')}}" method="post">
                            {{csrf_field()}}

                            <input type="hidden" id="id" name="id" value="{{$morador->id}}" />
{{--                            {{$morador->id}}--}}

                            <div class="form-group row">
                                <label for="nome" class="col-sm-2 col-form-label">Nome </label>
                                <div class="col-sm-8">
{{--                                    <input type="text" class="form-control" id="nome" name="nome" >--}}
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{$morador->nome}}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf" class="col-sm-2 col-form-label">CPF </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$morador->cpf}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" value="{{$morador->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$morador->telefone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="placa" class="col-sm-2 col-form-label">Placa</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="placa" name="placa" value="{{$morador->placa}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="veiculo" class="col-sm-2 col-form-label">Veiculo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="veiculo" name="veiculo" value="{{$morador->veiculo}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="situacao" class="col-sm-2 col-form-label">Situaçao </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="situacao" name="situacao" value="{{$morador->situacao}}">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="unidade" class="col-sm-2 col-form-label">Unidade</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="unidade" name="unidade" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="condominio" class="col-sm-2 col-form-label">Condominio</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="condominio" name="condominio" >
                                </div>
                            </div>









                            <button class="btn btn-primary">Salvar</button>
                            <a href="{{ url('morador/listar') }}" class="btn btn-warning">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
