<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;

class CalendarioController extends Controller
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
        $eventos = Calendario::all()->where('ativo','1')->sortByDesc('data');

        return view('calendario.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Calendario();

        $evento->evento = $request->evento;
        $evento->detalhe = $request->detalhe;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->ativo = 1;

        $evento->save();

        return redirect()->back()->with('alertSuccess','Evento cadastrado com sucesso!');
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
        $evento = Calendario::find($id);
        return view('calendario.update', compact('evento'));
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
        $evento = Calendario::find($id);

        $evento->evento = $request->evento;
        $evento->detalhe = $request->detalhe;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->ativo = 1;

        $evento->update();

        return redirect()->route('calendario.create')->with('alertSuccess','Evento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calendario::find($id)->delete();
        return redirect()->back()->with('alertSuccess', 'Excluído com Sucesso!');
    }
}
