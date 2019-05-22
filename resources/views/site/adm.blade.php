@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Página Administrativa</b></div>
                <div class="panel-body">
                    <h4>
                        <a href="{{ route('calendario.create') }}">
                        <span style="font-size: 50px; color: #5fa07a;">
                            <i class="fas fa-calendar-check"></i>
                        </span>
                        Criar Eventos</a>
                    </h4>
                    <h4>
                        <a href="{{ route('cadastros.create') }}">
                        <span style="font-size: 50px; color: #5fa07a;">
                            <i class="fas fa-users"></i>
                        </span>
                        Lista de Associados</a>
                    </h4>
                    <h4>
                        <a href="{{ route('resultados.create') }}">
                        <span style="font-size: 50px; color: #5fa07a;">
                            <i class="fas fa-sort-amount-up"></i>
                        </span>
                        Inserir Resultados</a>
                    </h4>
                    <h4>
                        <a href="{{ route('contatos.index') }}">
                        <span style="font-size: 50px; color: #5fa07a;">
                            <i class="fas fa-envelope-open"></i>
                        </span>
                        Contatos</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
