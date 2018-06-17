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
    	$idActivite = $request->idActivite;
    	return DB::select("

    	");
    }
}
