<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ArticleRequest;
use App\Models\Creneaux_horaire;

class Creneaux_horairesController extends Controller{


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $object = Creneaux_horaire::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        return DB::select("
            select * from creneaux_horaires where duree=".$request->duree.";
        ");
    }


    public function edit(Request $request)
    {
        //
    }


    public function update(Request $request, Creneaux_horaire $semestre)
    {
        $object = Creneaux_horaire::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy(Request $request)
    {
        Creneaux_horaire::find($id)->delete();
        return response()->json(['done']);
    }
}