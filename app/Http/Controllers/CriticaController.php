<?php

namespace App\Http\Controllers;

use App\Models\Critica;
use Illuminate\Http\Request;

class CriticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criticas = Critica::all();
        return view('critica.index', compact('criticas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criticas = new Critica();
        $criticas->nombrePelicula = $request->input("nombrePelicula");
        $criticas->nombreUsuario = $request->input("nombreUsuario");
        $criticas->comentario = $request->input("comentario");
        $criticas->fecha = "2024-02-29";
        $criticas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Critica $critica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Critica $critica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $critica = Critica::find($id);
        $critica->nombrePelicula = $request->input("nombrePelicula");
        $critica->nombreUsuario = $request->input("nombreUsuario");
        $critica->comentario = $request->input("comentario");
        $critica->fecha = "2024-02-29";
        $critica->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $critica = Critica::find($id);
        $critica->delete();
        return redirect()->back();
    }
}
