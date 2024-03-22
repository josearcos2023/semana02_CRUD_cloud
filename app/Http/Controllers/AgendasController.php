<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Agenda;
use App\Http\Requests\AgendaRequest;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $agendas= Agenda::all();
        return view('agendas.index', ['agendas'=>$agendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('agendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AgendaRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AgendaRequest $request)
    {
        $agenda = new Agenda;
		$agenda->nombre = $request->input('nombre');
		$agenda->apellido = $request->input('apellido');
		$agenda->celular = $request->input('celular');
        $agenda->save();

        return to_route('agendas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendas.show',['agenda'=>$agenda]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendas.edit',['agenda'=>$agenda]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AgendaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AgendaRequest $request, $id)
    {
        $agenda = Agenda::findOrFail($id);
		$agenda->nombre = $request->input('nombre');
		$agenda->apellido = $request->input('apellido');
		$agenda->celular = $request->input('celular');
        $agenda->save();

        return to_route('agendas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return to_route('agendas.index');
    }
}
