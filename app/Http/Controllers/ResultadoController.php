<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;
use App\Cadastro;
use App\Resultado;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resultados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Calendario::all()->where('ativo', 1)->sortBy('data');
        $cadastros = Cadastro::all();
        $resultados = Resultado::all()->sortByDesc('id');

        return view('resultados.create', compact('eventos', 'cadastros', 'resultados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultado = new Resultado();

        $resultado->cadastro_id = $request->cadastro_id;
        $resultado->evento = $request->evento;
        $resultado->nota1 = $request->nota1;
        $resultado->nota2 = $request->nota2;
        $resultado->nota3 = $request->nota3;
        $media = ($request->nota1 + $request->nota2 + $request->nota3)/3;
        $resultado->nota_final = number_format($media, 2, '.', ',');

        $resultado->save();

        return redirect()->back()->with('alertSuccess', 'Resultado inserido com sucesso!');
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
        $resultado = Resultado::find($id);
        $eventos = Calendario::all();
        $cadastros = Cadastro::all();
        //dd($resultado);
        return view('resultados.update', compact('resultado', 'eventos', 'cadastros'));
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
        $resultado = Resultado::find($id);
        //dd($resultado);
        //$resultado->cadastro_id = $request->cadastro_id;
        //$resultado->evento = $request->evento;
        $resultado->nota1 = $request->nota1;
        $resultado->nota2 = $request->nota2;
        $resultado->nota3 = $request->nota3;
        $resultado->nota_final = ($request->nota1 + $request->nota2 + $request->nota3)/3;

        $resultado->update();

        return redirect()->route('resultados.create')->with('alertSuccess', 'Resultado atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resultado::find($id)->delete();
        return redirect()->back()->with('alertSuccess', 'Excluído com Sucesso!');
    }
}
