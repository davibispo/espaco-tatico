@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Mensagens Enviadas de Contatos</b></div>
                <div class="panel-body">
                    <table class="table table-bordered table-sm" style="font-size:12px">
                        <tr>
                            <th style="width:20%">Nome</th>
                            <th style="width:20%">E-mail</th>
                            <th style="width:10%">Telefone</th>
                            <th style="width:40%">Mensagem</th>
                            <th style="width:10%">Enviada em</th>
                        </tr>
                        @forelse ($contatos as $con)
                            <tr>
                                <td>{{ $con->nome }}</td>
                                <td>{{ $con->email }}</td>
                                <td>{{ $con->telefone }}</td>
                                <td>{{ $con->mensagem }}</td>
                                <td>{{ date('d/m/y', strtotime($con->created_at)) }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-warning">
                                <p>Nenhuma mensagem enviada!</p>
                            </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
