<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadore = Jugador::All();
        return view("jugador.listado",['jugadores'=>$jugadore]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugadore = Jugador::All();
        return view("jugador.create",['jugadores'=>$jugadore]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "<h1>Estoy en store</h1>";
        $jugador = new Jugador($request->input());
        $jugador->save();
        $jugadore = Jugador::all();

        return view("jugador.listado",["msj"=> "El jugador $jugador->nombre se ha guardado", "jugadores"=>$jugadore]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        return view("jugador.edit",['jugador'=>$jugador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        $jugador->fill($request->input())->saveOrFail();
        $jugadore = Jugador::all();

        return view("jugador.listado",["msj"=> "El jugador $jugador->nombre se ha actualizado", "jugadores"=>$jugadore]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        echo "<h1>Estoy en destroy</h1>";
        $jugador->delete();

        $jugadore = Jugador::all();

        return view("jugador.listado",["msj"=> "El jugador $jugador->nombre se ha borrado", "jugadores"=>$jugadore]);
    }
}
