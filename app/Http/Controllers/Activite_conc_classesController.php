<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\Http\Requests\ArticleRequest;
use App\Models\Activite_conc_classe;

class Activite_conc_classesController extends Controller{


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
        $object = Activite_conc_classe::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        $idActivite = $request->idActivite;
        if($request->ajax()) {
            return DB::select('
                SELECT
                  activite_conc_classes.id,
                  classes.code_classe,
                  classes.libelle_classe
                FROM
                  activites,
                  activite_conc_classes,
                  classes
                WHERE
                  activites.id = activite_conc_classes.id_activite AND
                  activite_conc_classes.id_classe = classes.id AND
                  activites.id = '. $idActivite.'
                ORDER BY
                  classes.code_classe ASC
            ');
        }else{
            return view('home');
        }
    }


    public function edit(Activite_conc_classe $semestre)
    {
        //
    }


    public function update(Request $request, Activite_conc_classe $semestre)
    {
        $object = Activite_conc_classe::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        Activite_conc_classe::find($id)->delete();
        return response()->json(['done']);
    }
}