<?php

namespace App\Http\Controllers;

use App\Horarios;
use App\Pessoas;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoas::get();
        $horarios = Horarios::get();

        return view('pessoas.lista', [
            'pessoas' => $pessoas,
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
        return view('pessoas.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoas = new Pessoas();
        $pessoas->nome = $request->nome;
        $pessoas->periodo = $request->periodo;

        $pessoas->save();
        return redirect()->back()->withInput()->withErrors(['Cadastro realizado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoas $pessoas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoas $pessoas, Request $request)
    {
        $id = $request->id;
        $passoa = Pessoas::find($id);

        return view('pessoas.editar', [
            'pessoa' => $passoa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoas $pessoas, $id)
    {
        $nome = $request->nome;
        $periodo = $request->periodo;
        if(Pessoas::find($id)->update([
            'nome' => $nome,
            'periodo' => $periodo
        ])) {
            return redirect()->route('pessoas.index')->withInput()->withErrors(['Registro alterado com sucesso!']);
        } else {
            return redirect()->back()->withInput()->withErrors(['Erro ao alterar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoas $pessoas, $id)
    {
        $delete = Pessoas::find($id);
        $delete->delete();

        return redirect()->back()->withInput()->withErrors(['Cadastro deletado com sucesso']);
    }
}
