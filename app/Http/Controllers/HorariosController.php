<?php

namespace App\Http\Controllers;

use App\Horarios;
use App\Pessoas;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        $pessoas = Pessoas::get();

        return view('horarios.lista', [
            'horarios' => $horarios,
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoas::get();
        return view('horarios.cadastro', [
            'pessoas' => $pessoas
        ]);
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
        $horario->remedio = $request->remedio;
        $horario->dosagem = $request->dosagem;
        $horario->valor = (float) $request->valor;

        $horario->save();
        return redirect()->back()->withInput()->withErrors(['Cadastro realizado com sucesso']);
        // dd($horario->valor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function show(Horarios $horarios, Request $request)
    {
        return view('horarios.consulta');
    }

    public function pesquisa(Request $request)
    {
        $campo = $request->campo;
        $resultado = Horarios::orderBy($campo,'asc')->get();
        if ($resultado) {
            return view('horarios.pesquisa', [
                'resultados' => $resultado,
                'campo' => $campo

            ]);
        } else {
            return redirect()->back()->withInput()->withErrors(['Não encontrado!']);
        }
        // dd($resultado);
    }

    public function consHorario(Request $request)
    {
        $query = $request->consulta;
        $campo = $request->campo;
        $resultado = Horarios::where($campo, '=', $query)->first();
        if ($resultado) {
            return view('horarios.resultado', [
                'resultado' => $resultado,
                'campo' => $campo
            ]);
        } else {
            return redirect()->back()->withInput()->withErrors(['Não encontrado!']);
        }
        // dd($resultado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Horarios $horarios, $id)
    {
        // $id = $request->id;
        $horario = Horarios::find($id);
        $pessoas = Pessoas::get();

        return view('horarios.editar', [
            'horario' => $horario,
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horarios $horarios, $id)
    {
        $horario = $request->horario;
        $pessoa_id = $request->pessoa_id;
        $remedio = $request->remedio;
        $dosagem = $request->dosagem;
        $valor = (float) $request->valor;
        if(Horarios::find($id)->update([
            'horario' => $horario,
            'pessoa_id' => $pessoa_id,
            'remedio' => $remedio,
            'dosagem' => $dosagem,
            'valor' => $valor
        ])) {
            return redirect()->route('horario.index')->withInput()->withErrors(['Registro alterado com sucesso!']);
        } else {
            return redirect()->back()->withInput()->withErrors(['Erro ao aletrar!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horarios  $horarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horarios $horarios, $id)
    {
        $delete = Horarios::find($id);
        $delete->delete();

        return redirect()->back()->withInput()->withErrors(['Cadastro deletado com sucesso']);
    }
}
