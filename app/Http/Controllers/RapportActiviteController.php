<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RapportActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOptionActivite(Request $request)
    {
        $typeActivite1;
        $typeActivite2;
        $idClass = $request->idClass;
        $idAnnee = $request->idAnnee;
        
        if($request->typeActivite=="examen"){
            $typeActivite1 = "normale";
            $typeActivite2 = "rattrapage";
        }else{
            $typeActivite1 = $request->typeActivite;
            $typeActivite2 = $request->typeActivite;
        }
        return DB::select("
            SELECT 
              activites.id, 
              activites.id_annee, 
              activites.id_semestre, 
              activites.id_niveau, 
              activites.date_debut_activite, 
              activites.date_fin_activite, 
              activites.type_activite
            FROM 
              public.activites, 
              public.annee_academiques, 
              public.classes, 
              public.activite_conc_classes
            WHERE 
              activites.id_annee = annee_academiques.id AND
              activite_conc_classes.id_activite = activites.id AND
              activite_conc_classes.id_classe = classes.id AND(
              activites.type_activite = '$typeActivite1' OR 
              activites.type_activite = '$typeActivite2') AND
              classes.id = '$idClass' AND 
              annee_academiques.id = '$idAnnee' 
            ORDER BY
              activites.date_debut_activite DESC;
        ");
    }

    
    public function create()
    {
        //
    }
}
