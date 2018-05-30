<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Creneaux_horaire;

class Creneaux_horairesController extends Controller{

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $object = Creneaux_horaire::create($request->all());
        return response()->json($object);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Creneaux_horaire  $semestre
     * @return \Illuminate\Http\Response
     */
    public function show(Creneaux_horaire $semestre)
    {
        $objects = Creneaux_horaire::latest()->paginate(1);
        return response()->json($objects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Creneaux_horaire  $semestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Creneaux_horaire $semestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Creneaux_horaire  $semestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creneaux_horaire $semestre)
    {
        $object = Creneaux_horaire::find($id)->update($request->all());
        return response()->json($object);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Creneaux_horaire  $semestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creneaux_horaire $semestre)
    {
        Creneaux_horaire::find($id)->delete();
        return response()->json(['done']);
    }
}