<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RapportActiviteController extends Controller
{
    public function rapportActivite()
    {
        return view('rapports.index');
    }

    public function getOptionTypeActivite(Request $request)
    {
        $idClasse = $request->idClasse;
        return DB::select("
          SELECT 
            DISTINCT activites.id,
            activites.type_activite
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

    public function getOptionMatiere(Request $request)
    {
    	$idActivite = $request->idActivite;
    	$table = $request->table;
    	return DB::select("
    		SELECT 
			  matieres.code_matiere, 
			  matieres.libelle_matiere
			FROM 
			  public.matieres
			WHERE 
			  matieres.id IN(
			    SELECT
			      id_matiere
			    FROM
			      $table
			    WHERE
			      id_activite = '$idActivite'
			  );
		");
    }


    public function getListePresence(Request $request)
    {
    	$idActivite = $request->idActivite;
    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  users.date_nais, 
			  etud_ins_mats.regime
			FROM 
			  public.activites, 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats, 
			  public.etud_realise_activs
			WHERE 
			  etudiants.id_user = users.id AND
			  etudiants.id = etud_scolariser_clas.id_etudiant AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id = etud_realise_activs.id_etud_ins_mat AND
			  etud_realise_activs.id_activite = activites.id AND
			  activites.id = '$idActivite'
			ORDER BY
			  users.name ASC, 
			  users.prenom ASC;
    	");
    }

    public function getListeTricheur(Request $request)
    {
    	$idActivite = $request->idActivite;
    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  users.date_nais, 
			  etud_ins_mats.regime
			FROM 
			  public.activites, 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats, 
			  public.etud_realise_activs
			WHERE 
			  etudiants.id_user = users.id AND
			  etudiants.id = etud_scolariser_clas.id_etudiant AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id = etud_realise_activs.id_etud_ins_mat AND
			  etud_realise_activs.id_activite = activites.id AND
			  activites.id = '$idActivite' AND 
			  etud_realise_activs.statut = '2'
			ORDER BY
			  users.name ASC, 
			  users.prenom ASC;
    	");
    }

    public function getListAbsent(Request $request)
    {
    	$table = $request->idActivite;
    	$idActivite = $request->idActivite;
    	$idMatiere = $request->idMatiere;
    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  users.photo, 
			  etud_ins_mats.regime, 
			  matieres.code_matiere, 
			  matieres.libelle_matiere
			FROM 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats, 
			  public.matieres
			WHERE 
			  users.id = etudiants.id_user AND
			  etudiants.id = etud_scolariser_clas.id_etudiant AND
			  etud_scolariser_clas.id = etud_ins_mats.id_scolariser AND
			  matieres.id = etud_ins_mats.id_matiere AND
			  matieres.id IN(
			    SELECT 
			      id_matiere
			    FROM
			      $table
			    WHERE
			     id_activite = '$idActivite' AND
			     id_matiere = '$idMatiere'
			  ) AND
			  etud_ins_mats.id NOT IN(
			    SELECT 
			      id_etud_ins_mat
			    FROM
			      etud_realise_activs
			    WHERE
			     id_activite = '$idActivite'
			  )
			;
    	");
    }
}
