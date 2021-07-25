<?php

namespace App\Http\Controllers;

use App\Horarios;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horarios::get();

        return view('horarios.lista', [
            'horarios' => $horarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horarios.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario = new Horarios();
        $horario->horario = $request->horario;
        $horario->pessoa_id = $request->pessoa_id;
        $horario->remedio_id = $request->remedio_id;

        $horario->save();
        return redirect()->back()->withInput()->withErrors(['Cadastro realizado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios $horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Horarios $horarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horarios $horarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horarios $horarios)
    {
        //
    }
}
