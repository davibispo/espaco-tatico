@extends('layouts.adm')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Adicionar Novo Associado</b></div>

                <div class="panel-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'CadastroController@store', 'class'=>'form-horizontal']) !!}
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
                            <input type="tel" name="telefone" class="form-control" required/>
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
                            {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <!-- Lista de eventos cadastrados -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nº de Cadastrados: <b>{{  DB::table('cadastros')->where('ativo', '=', 1)->count() }}</b><br>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NR</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th></th>
                        </tr>
                        @foreach ($cadastros as $cadastro)
                        <tr>
                            <td>{{ $cadastro->nr }}</td>
                            <td>{{ $cadastro->nome }}</td>
                            <td>{{ $cadastro->telefone }}</td>
                            <td>{{ $cadastro->email }}</td>
                            <td>
                                <span style="text-align: right">
                                    <a href="{{route('cadastros.edit', $cadastro->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="editar"><i class="fas fa-pencil-alt"></i></a>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['CadastroController@destroy', $cadastro->id], 'style'=>'display:inline']) !!}
                                    {!! Form::submit('x', ['class'=>'btn btn-danger btn-xs', 'data-toggle'=>'tooltip', 'title'=>'excluir']) !!}
                                    {!! Form::close() !!}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



