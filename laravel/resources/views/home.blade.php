@extends('layouts.condominio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style=" color: #9b8a30" ><strong><h2>Escolha o condominío para continuar</h2></strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div align="center" class="panel-heading" style=" color: #9b8a30" >
                            <strong>Por do sol</strong>
                            <a href="{{ url('/morador/listar') }}">
                                <img align="center" src="img/cond_2.png">
                            </a>
                            <a href="{{ url('/morador/listar') }}">
                                <img align="center" src="img/cond_2.png">
                            </a>
                            <strong>Allegro</strong>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
