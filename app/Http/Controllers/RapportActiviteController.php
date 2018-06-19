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
    		  id,
			  code_matiere, 
			  libelle_matiere
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
    	$idTable = "";
    	$table2 = "";
    	$idActivite = $request->idActivite;
    	$idMatiere = $request->idMatiere;
    	$table = $request->table;

    	if($table=="examens"){
    		$idTable = "id_examen";
    		$table2 = "etud_compose_examens";
    	}else{
    		if($table=="cours"){
    			$idTable = "id_cours";
    			$table2 = "etud_etudie_cours";
    		}else{
    			$idTable = "id_tp";
    			$table2 = "etud_participe_tps";
    		}
    	}

    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  etud_ins_mats.regime
			FROM 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats
			WHERE 
			  etudiants.id_user = users.id AND
			  etud_scolariser_clas.id_etudiant = etudiants.id AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id_matiere = '$idMatiere' AND
			  etud_ins_mats.id IN (
			    SELECT
			      id_etud_ins_mat
			    FROM
			      public.$table2, 
			      public.$table
			    WHERE
			      $table.id = $idTable AND
			      id_activite = '$idActivite' AND
			      id_matiere = '$idMatiere')
			ORDER BY
			  users.name ASC, 
			  users.prenom ASC;
    	");
    }

    public function getListeTricheur(Request $request)
    {
    	$idTable = "";
    	$table2 = "";
    	$idActivite = $request->idActivite;
    	$idMatiere = $request->idMatiere;
    	$table = $request->table;
    	
    	if($table=="examens"){
    		$idTable = "id_examen";
    		$table2 = "etud_compose_examens";
    	}else{
    		if($table=="cours"){
    			$idTable = "id_cours";
    			$table2 = "etud_etudie_cours";
    		}else{
    			$idTable = "id_tp";
    			$table2 = "etud_participe_tps";
    		}
    	}

    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  etud_ins_mats.regime
			FROM 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats
			WHERE 
			  etudiants.id_user = users.id AND
			  etud_scolariser_clas.id_etudiant = etudiants.id AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id_matiere = '$idMatiere' AND
			  etud_ins_mats.id IN (
			    SELECT
			      id_etud_ins_mat
			    FROM
			      public.$table2, 
			      public.$table
			    WHERE
			      $table.id = $idTable AND
			      id_activite = '$idActivite' AND
			      id_matiere = '$idMatiere' AND
      			  statut = '2')
			ORDER BY
			  users.name ASC, 
			  users.prenom ASC;
    	");
    }

    public function getListAbsent(Request $request)
    {
    	$idTable = "";
    	$table2 = "";
    	$idActivite = $request->idActivite;
    	$idMatiere = $request->idMatiere;
    	$table = $request->table;

    	if($table=="examens"){
    		$idTable = "id_examen";
    		$table2 = "etud_compose_examens";
    	}else{
    		if($table=="cours"){
    			$idTable = "id_cours";
    			$table2 = "etud_etudie_cours";
    		}else{
    			$idTable = "id_tp";
    			$table2 = "etud_participe_tps";
    		}
    	}

    	return DB::select("
    		SELECT 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  users.prenom, 
			  etud_ins_mats.regime
			FROM 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats
			WHERE 
			  etudiants.id_user = users.id AND
			  etud_scolariser_clas.id_etudiant = etudiants.id AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id_matiere = '$idMatiere' AND
			  etud_ins_mats.id NOT IN (
			    SELECT
			      id_etud_ins_mat
			    FROM
			      public.$table2, 
			      public.$table
			    WHERE
			      $table.id = $idTable AND
			      id_activite = '$idActivite' AND
			      id_matiere = '$idMatiere')
			ORDER BY
			  users.name ASC, 
			  users.prenom ASC;
    	");
    }

	public function getNombre(Request $request)
    {
    	$idActivite = $request->idActivite;
    	$idMatiere = $request->idMatiere;
    	$table = $request->table;
    	
    	return DB::select("
    		SELECT 
			  count(*)
			FROM 
			  public.users, 
			  public.etudiants, 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats, 
			  public.matieres, 
			  public.$table
			WHERE 
			  etudiants.id_user = users.id AND
			  etud_scolariser_clas.id_etudiant = etudiants.id AND
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  etud_ins_mats.id_matiere = matieres.id AND
			  matieres.id = $table.id_matiere AND
			  $table.id_activite = '$idActivite' AND 
			  $table.id_matiere = '$idMatiere';
    	");
    }
}