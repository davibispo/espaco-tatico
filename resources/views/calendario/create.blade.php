@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Adicionar evento no calendário</b></div>

                <div class="panel-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'CalendarioController@store', 'class'=>'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('evento', 'Evento', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <textarea rows="2" cols="" class="form-control" name="evento"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('detalhe', 'Detalhes', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <textarea rows="7" cols="" class="form-control" name="detalhe"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('data', 'Data', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::date('data', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('hora', 'Horário', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('hora', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Adicionar Evento', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>


            <!-- Lista de eventos cadastrados -->
            <div class="panel panel-default">
                <div class="panel-heading"><b>Lista de eventos cadastrados</b></div>
                <div class="panel-body">
                    @foreach ($eventos as $evento)
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Data: <b>{{ date('d-m-y', strtotime($evento->data)) }}</b></td>
                                <td>Hora: <b>{{ $evento->hora }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>{{ $evento->evento }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="2">{{ $evento->detalhe }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right">
                                    <span style="text-align: right">
                                        <a href="{{route('calendario.edit', $evento->id)}}" class="btn btn-warning btn-xs">Editar</a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['CalendarioController@destroy', $evento->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('x', ['class'=>'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


