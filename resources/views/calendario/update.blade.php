@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Atualizar evento</b></div>

                <div class="panel-body">
                    {!! Form::model($evento,['method'=>'PATCH', 'action'=>['CalendarioController@update', $evento->id], 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('evento', 'Evento', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <textarea rows="2" cols="" class="form-control" name="evento">{{ $evento->evento }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('detalhe', 'Detalhes', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            <textarea rows="7" cols="" class="form-control" name="detalhe">{{ $evento->detalhe }}</textarea>
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
                            {!! Form::submit('Atualizar Evento', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


