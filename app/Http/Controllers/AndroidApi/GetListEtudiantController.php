<?php

namespace App\Http\Controllers\AndroidApi;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fonction;

class GetListEtudiantController extends Controller
{
    

    public function getListEtudiants(Request $request)
    {
      $date = Fonction::getDate();
    $heure = Fonction::getTime("h");
        //if (!empty($request->idActivite)) {
            $idActivite = $request->idActivite;
            $statut = $request->statut;
            $listEtudiant = DB::select("
                SELECT
                  etudiants.matricule_etudiant,
                  users.name,
                  users.prenom,
                  users.sexe,
                  users.date_nais,
                  users.telephone,
                  users.email,
                  users.photo,
                  etud_ins_mats.regime
                FROM
                  public.users,
                  public.etudiants,
                  public.etud_scolariser_clas,
                  public.classes,
                  public.etud_ins_mats,
                  public.matieres,
                  public.examens,
                  public.activites,
                  public.etud_realise_activs,
                  public.creneaux_horaires
                WHERE
                  users.id = etudiants.id_user AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  etud_scolariser_clas.id_classe = classes.id AND
                  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
                  examens.id_matiere = matieres.id AND
                  activites.id = examens.id_activite AND
                  etud_realise_activs.id_activite = activites.id AND
                  etud_realise_activs.id_etud_ins_mat = etud_ins_mats.id AND
                  creneaux_horaires.id = examens.id_creneau AND
                  activites.id = '" . $idActivite . "' AND
                  examens.date_examen = '" . $date . "' AND
                  etud_realise_activs.statut = '$statut' AND
                  creneaux_horaires.libelle_creneaux LIKE '%" . $heure . "%'
            ");
            $etudiants = array();
            foreach ($listEtudiant as $key => $value) {
                $sol = array(
                    "matricule"         => $value->matricule_etudiant,
                    "nom"               => $value->name,
                    "prenom"            => $value->prenom,
                    "sexe"              => $value->sexe,
                    "telephone"         => $value->telephone,
                    "regime"            => $value->regime
                );
                $path = "images/".$value->photo;
                if(file_exists($path)){
                    $sol["photo"] = base64_encode(file_get_contents($path));
                    //$sol["photo"]=$dev['photo'];
                }
                $etudiants[] = $sol;
            }
            return json_encode(compact("etudiants"));
       // }
    }

    public function getListAllEtudiants(Request $request){
    $date = Fonction::getDate();
    $heure = Fonction::getTime("h");
     $idActivite = 1;//$request->idActivite;
     $listEtudiant = DB::select("
        SELECT
          etudiants.matricule_etudiant,
          users.name,
          users.prenom,
          users.sexe,
          users.date_nais,
          users.telephone,
          users.email,
          users.photo,
          etud_ins_mats.regime
        FROM
          public.users,
          public.etudiants,
          public.etud_scolariser_clas,
          public.classes,
          public.etud_ins_mats,
          public.matieres,
          public.examens,
          public.activites,
          public.creneaux_horaires
        WHERE
          users.id = etudiants.id_user AND
          etud_scolariser_clas.id_etudiant = etudiants.id AND
          etud_scolariser_clas.id_classe = classes.id AND
          etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
          etud_ins_mats.id_matiere = matieres.id AND
          creneaux_horaires.id = examens.id_creneau AND
          examens.id_matiere = matieres.id AND
          activites.id = examens.id_activite AND
          activites.id = '$idActivite' AND
          examens.id_creneau = '1' AND
          creneaux_horaires.libelle_creneaux LIKE '%" . $heure . "%'
     ");
    $etudiants = array();
    foreach ($listEtudiant as $key => $value) {
        //echo $value->matricule_etudiant."<br>";
        $sol = array(
            "matricule"         => $value->matricule_etudiant,
            "nom"               => $value->name,
            "prenom"            => $value->prenom,
            "sexe"              => $value->sexe,
            "telephone"         => $value->telephone,
            "regime"            => $value->regime
        );
        $path = "images/".$value->photo;
        if(file_exists($path)){
            $sol["photo"] = base64_encode(file_get_contents($path));
            //$sol["photo"]=$dev['photo'];
        }
        $etudiants[] = $sol;
    }
    return json_encode(compact("etudiants"));
    }
}
