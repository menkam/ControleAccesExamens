<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Salle;

class SallesController extends Controller{

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
        $object = Salle::create($request->all());
        return response()->json($object);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salle  $semestre
     * @return \Illuminate\Http\Response
     */
    public function show(Salle $semestre)
    {
        $objects = Salle::latest()->paginate(1);
        return response()->json($objects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salle  $semestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Salle $semestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salle  $semestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salle $semestre)
    {
        $object = Salle::find($id)->update($request->all());
        return response()->json($object);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salle  $semestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $semestre)
    {
        Salle::find($id)->delete();
        return response()->json(['done']);
    }
}