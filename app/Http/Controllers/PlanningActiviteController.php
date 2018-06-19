<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlanningActiviteController extends Controller
{
    public function planningActivite()
    {
        return view('planning.index');
    }

    public function getOptionActivite(Request $request)
    {
        $idClasse = $request->idClasse;
        $idAnnee = $request->idAnnee;
        $typeActivite = $request->typeActivite;

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
              activite_conc_classes.id_classe = classes.id AND
              activites.type_activite = '$typeActivite' AND
              classes.id = '$idClasse' AND 
              annee_academiques.id = '$idAnnee' 
            ORDER BY
              activites.date_debut_activite DESC;
        ");
    }

    
    public function getMatierePlanning(Request $request)
    {
      $type = $request->typeActivite;
      $idActivite = $request->idActivite;
      $table = "";
      $nom_date = "";

      if($type == 'normale' || $type == 'rattrapage'){
        $table = "examens";
        $nom_date = "date_examen";
      }else{
        if($type == 'tp'){
          $table = "tps";
          $nom_date = "tps.date_tp";
        }else{
          $nom_date = "cours.date_cours";
          $table = "cours";
        }
      }

      return DB::select("
        SELECT 
          $nom_date datem, 
          creneaux_horaires.libelle_creneaux, 
          matieres.libelle_matiere, 
          activites.date_debut_activite, 
          activites.date_fin_activite, 
          activites.type_activite, 
          classes.code_classe, 
          classes.libelle_classe, 
          classes.effectif_classe 
        FROM 
          public.activites, 
          public.matieres, 
          public.creneaux_horaires, 
          public.$table, 
          public.activite_conc_classes, 
          public.classes
        WHERE 
          $table.id_activite = activites.id AND
          $table.id_matiere = matieres.id AND
          $table.id_creneau = creneaux_horaires.id AND
          activite_conc_classes.id_activite = activites.id AND
          classes.id = activite_conc_classes.id_classe AND
          activites.id = '$idActivite'
        ORDER BY
          $nom_date ASC, 
          creneaux_horaires.libelle_creneaux ASC;
      ");
    }

    public function getOptionTypeActivite(Request $request)
    {
        $idClasse = $request->idClasse;
        return DB::select("
          SELECT 
            DISTINCT activites.type_activite
          FROM 
            public.activites, 
            public.activite_conc_classes, 
            public.classes
          WHERE 
            activite_conc_classes.id_activite = activites.id AND
            classes.id = activite_conc_classes.id_classe AND
            classes.id = '$idClasse';
      ");
    }

}
