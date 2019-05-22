<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastros = Cadastro::all()->sortByDesc('id');
        return view('cadastros.create', compact('cadastros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro();

        $cadastro->nr = $request->nr;
        $cadastro->nome = $request->nome;
        $cadastro->sexo = $request->sexo;
        $cadastro->telefone = $request->telefone;
        $cadastro->email = $request->email;
        $cadastro->ativo = 1;

        $cadastro->save();

        return redirect()->back()->with('alertSuccess', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = Cadastro::find($id);
        return view('cadastros.update', compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cadastro = Cadastro::find($id);

        $cadastro->nr = $request->nr;
        $cadastro->nome = $request->nome;
        $cadastro->sexo = $request->sexo;
        $cadastro->telefone = $request->telefone;
        $cadastro->email = $request->email;
        $cadastro->ativo = 1;

        $cadastro->update();

        return redirect()->route('cadastros.create')->with('alertSuccess', 'Cadastro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cadastro::find($id)->delete();
        return redirect()->back()->with('alertSuccess', 'Excluído com Sucesso!');
    }
}
