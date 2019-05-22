@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Atualizar dados de Associado</b></div>

                <div class="panel-body">
                    {!! Form::model($cadastro,['method'=>'PATCH', 'action'=>['CadastroController@update', $cadastro->id], 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('nr', 'NR', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nr', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('nome', 'Nome Completo', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('sexo', 'Sexo', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('sexo',
                                [
                                'M' => 'Masculino',
                                'F' => 'Feminino',
                                ],
                                null, ['class' => 'form-control', 'placeholder' => '-- Escolha o sexo --'])
                            !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefone', 'Telefone', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('telefone', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Atualizar', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



