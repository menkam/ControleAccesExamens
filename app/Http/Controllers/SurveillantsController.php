<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\surveillant;
use App\Models\Surveillant;

class SurveillantsController extends Controller{

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
        $object = Surveillant::create($request->all());
        return response()->json($object);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surveillant  $semestre
     * @return \Illuminate\Http\Response
     */
    public function show(Surveillant $semestre)
    {
        $objects = Surveillant::latest()->paginate(1);
        return response()->json($objects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surveillant  $semestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Surveillant $semestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surveillant  $semestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surveillant $semestre)
    {
        $object = Surveillant::find($id)->update($request->all());
        return response()->json($object);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surveillant  $semestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surveillant $semestre)
    {
        Surveillant::find($id)->delete();
        return response()->json(['done']);
    }
}