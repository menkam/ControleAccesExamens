<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\Http\Requests\ArticleRequest;
use App\Models\Salle_activite;

class Salle_activitesController extends Controller{


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
        $object = Salle_activite::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        $idActivite = $request->idActivite;
        if($request->ajax()) {
            return DB::select('
                SELECT
                  salle_activites.id,
                  salles.code_salle,
                  salles.libelle_salle,
                  salles.nbre_places
                FROM
                  activites,
                  salles,
                  salle_activites
                WHERE
                  activites.id = salle_activites.id_activite AND
                  salle_activites.id_salle = salles.id AND
                  activites.id = '.$idActivite.'
                ORDER BY
                  salles.code_salle ASC
            ');
            //return Salle_activite::all();
        }else{
            return view('home');
        }
    }

    public function findClasse(Request $request){
        $date = $request->date;
        $idCreneau = $request->idCreneau;

        $salle = DB::select("
            select * from salles where id not in (
                select
                 id_salle
                from
                  salle_activites,
                  activites,
                  examens
                where
                 salle_activites.id_activite=activites.id and
                 activites.id=examens.id_activite and
                 date_examen='$date' and
                 id_creneau='$idCreneau'
                )
            ORDER BY
            nbre_places ASC;
        ");

        $salle2 = DB::select("
            select * from salles;
        ");
/*
        foreach($salle1 as $val){
            $sol[] = [
                'id'=>$val->id,
                'code_salle'=>$val->code_salle,
                'libelle_salle'=>$val->libelle_salle,
                'nbre_places'=>$val->nbre_places
            ];
        }
        foreach($salle2 as $val){
            $sol[] = [
                'id'=>$val->id,
                'code_salle'=>$val->code_salle,
                'libelle_salle'=>$val->libelle_salle,
                'nbre_places'=>$val->nbre_places
            ];
        }
*/
        return response()->json($salle);

    }


    public function edit(Salle_activite $semestre)
    {
        //
    }


    public function update(Request $request, Salle_activite $semestre)
    {
       /* $object = Salle_activite::find($id)->update($request->all());
        return response()->json($object);*/
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        Salle_activite::find($id)->delete();
        return response()->json(['done']);
    }
}