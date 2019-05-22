@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Atualizar Resultados</b></div>
                <br>
                <div class="text-center">
                    <p>Atualizar notas de
                        @foreach ($cadastros as $cadastro)
                            @if ($resultado->cadastro_id == $cadastro->id)
                                <b>{{ $cadastro->nome }}</b>
                            @endif
                        @endforeach
                         do evento
                        <b>{{ $resultado->evento }}</b>
                    </p>
                </div>

                <div class="panel-body">
                    {!! Form::model($resultado,['method'=>'PATCH', 'action'=>['ResultadoController@update', $resultado->id], 'class'=>'form-horizontal']) !!}

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
                            {!! Form::submit('Atualizar Pontuação', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                    <div class="text-center">
                        <p><b>Pontuação Final: {{ $resultado->nota_final }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


