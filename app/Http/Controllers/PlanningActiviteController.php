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

        // si Examen (normale et ou rattrapage)
        if($type == 'normale' || $type == 'rattrapage'){
            return DB::select("
              SELECT 
                examens.date_examen as datem,
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
                public.examens, 
                public.activite_conc_classes, 
                public.classes
              WHERE 
                examens.id_activite = activites.id AND
                examens.id_matiere = matieres.id AND
                examens.id_creneau = creneaux_horaires.id AND
                activite_conc_classes.id_activite = activites.id AND
                classes.id = activite_conc_classes.id_classe AND
                activites.id = '$idActivite'
              ORDER BY
                examens.date_examen ASC, 
                creneaux_horaires.libelle_creneaux ASC;
          ");
        }

        // si Cours
        if($type == 'cours'){
            return DB::select("
                SELECT 
                  cours.date_cours as datem, 
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
                  public.cours, 
                  public.matieres, 
                  public.creneaux_horaires
                WHERE 
                  cours.id_activite = activites.id AND
                  cours.id_matiere = matieres.id AND
                  creneaux_horaires.id = cours.id_creneau AND
                  activite_conc_classes.id_activite = activites.id AND
                  activite_conc_classes.id_classe = classes.id AND
                  activites.id = '$idActivite'
                ORDER BY
                  cours.date_cours ASC, 
                  creneaux_horaires.libelle_creneaux ASC;
            ");
        }

        // si Tp
        if($type == 'tp'){
            return DB::select("
                SELECT 
                  creneaux_horaires.libelle_creneaux, 
                  matieres.libelle_matiere, 
                  tps.date_tp as datem,
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
                  public.tps
                WHERE 
                  tps.id = activites.id AND
                  tps.id_matiere = matieres.id AND
                  tps.id_creneau = creneaux_horaires.id AND
                  activite_conc_classes.id_activite = activites.id AND
                  activite_conc_classes.id_classe = classes.id AND
                  activites.id = '$idActivite'
                ORDER BY
                  tps.date_tp ASC, 
                  creneaux_horaires.libelle_creneaux ASC;
            ");
        }
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
