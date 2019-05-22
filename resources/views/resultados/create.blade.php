@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Inserir Resultados</b></div>

                <div class="panel-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'ResultadoController@store', 'class'=>'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('evento', 'Evento', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <select name='evento' class='form-control' required>
                                <option> -- Escolha o evento -- </option>
                                @foreach ($eventos as $evento)
                                    <option value="{{ $evento->id }}">{{ date('d/m/y', strtotime($evento->data)) }} - {{ $evento->evento }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('cadastro_id', 'Associado', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <select name='cadastro_id' class='form-control' required>
                                <option> -- Escolha o associado -- </option>
                                @foreach ($cadastros as $cadastro)
                                    <option value="{{ $cadastro->id }}">{{ $cadastro->nr }} - {{ $cadastro->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('nota1', 'Pontuação 1', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nota1', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('nota2', 'Pontuação 2', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nota2', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('nota3', 'Pontuação 3', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nota3', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Adicionar Pontuação', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>


            <!-- Lista de eventos cadastrados -->
            <div class="panel panel-default">
                <div class="panel-heading"><b>Resultados</b></div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped" style="font-size:12px">
                        <tr>
                            <th>Evento</th>
                            <th>Associado</th>
                            <th>Pont. 1</th>
                            <th>Pont. 2</th>
                            <th>Pont. 3</th>
                            <th>Pont. Final</th>
                            <th></th>
                        </tr>
                        @foreach ($resultados as $res)
                            @foreach ($cadastros as $cad)
                                @if ($res->cadastro_id == $cad->id)
                                <tr>
                                    <td>{{ $res->evento }}</td>
                                    <td>{{ $cad->nome }}</td>
                                    <td>{{ $res->nota1 }}</td>
                                    <td>{{ $res->nota2 }}</td>
                                    <td>{{ $res->nota3 }}</td>
                                    <th>{{ number_format($res->nota_final, 2, ',', ' ') }}</th>
                                    <td>
                                        <a href="{{route('resultados.edit', $res->id)}}" class="btn btn-warning btn-xs">Editar</a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['ResultadoController@destroy', $res->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('x', ['class'=>'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


