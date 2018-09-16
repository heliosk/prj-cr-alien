<?php

namespace App\Http\Controllers;

use DB;
use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::latest()->paginate(5);
        return view('eventos.index', compact('eventos'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cidade' => 'required',
            'estado' => 'required',
            'data' => 'required'
        ]);
        Evento::create($request->all());
        return redirect()->route('eventos.index')->with('success','Evento alienígena cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cidade' => 'required',
            'estado' => 'required',
            'data' => 'required'
        ]);
        Evento::find($id)->update($request->all());
        return redirect()->route('eventos.index')->with('success', 'Evento alienígena atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evento::find($id)->delete();
        return redirect()->route('eventos.index')->with('success','Evento alienígena removido com sucesso');
    }

    public function totalEventos()
    {
        $eventos = Evento::select('estado', DB::raw('count(*) as total'))
                    ->groupBy('estado')
                    ->get();

        return view('eventos.sumario', compact('eventos'));
    }
}
