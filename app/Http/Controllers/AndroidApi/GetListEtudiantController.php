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
      
      
        if(!empty($request->idUser)) {

          $heure = Fonction::getTime("H");
          $date = Fonction::getDate();
          $sol = Fonction::getIdClasse($request->idUser);

          $etudiants = array();

          if(!empty($sol)){
            $idActivite = $sol[0]->id_activite;

            $statut = $request->statut;
            $listEtudiant = DB::select("
              SELECT 
                etudiants.matricule_etudiant, 
                users.name, 
                users.prenom, 
                users.sexe, 
                users.telephone, 
                users.photo, 
                etud_ins_mats.regime
              FROM 
                public.etudiants, 
                public.users, 
                public.etud_compose_examens, 
                public.etud_ins_mats, 
                public.etud_scolariser_clas, 
                public.activites, 
                public.examens, 
                public.creneaux_horaires
              WHERE 
                etudiants.id_user = users.id AND
                etud_compose_examens.id_etud_ins_mat = etud_ins_mats.id AND
                etud_compose_examens.id_examen = examens.id AND
                etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
                etud_scolariser_clas.id_etudiant = etudiants.id AND
                examens.id_activite = activites.id AND
                creneaux_horaires.id = examens.id_creneau AND
                activites.id = '$idActivite' AND
                examens.date_examen = '$date' AND
                etud_compose_examens.statut = '$statut' AND
                creneaux_horaires.libelle_creneaux LIKE '%$heure%'
            ");
            
            foreach ($listEtudiant as $key => $value) {
              $sol = array(
                "matricule"         => $value->matricule_etudiant,
                "nom"               => $value->name,
                "prenom"            => $value->prenom,
                "sexe"              => $value->sexe,
                "telephone"         => $value->telephone,
                "regime"            => $value->regime,
                "photo"             => $value->photo
              );
              $path = "images/".$value->photo;
              if(file_exists($path)){
                $sol["photo"] = base64_encode(file_get_contents($path));
                //$sol["photo"]=$dev['photo'];
              }
              $etudiants[] = $sol;
            }
          }
          
          //dd($etudiants);
          return json_encode(compact("etudiants"));
        }
    }

    public function getListAllEtudiants(Request $request){
     
     
     if (!empty($request->idUser)) {

      $etudiants = array();
      $id_annee = "1";
      $date = Fonction::getDate();
      $heure = Fonction::getTime("H");
      $sol = Fonction::getIdClasse($request->idUser);

      if(!empty($sol)){
        $idClasse = $sol[0]->id_classe;

        $listEtudiant = DB::select("
        SELECT 
          etudiants.id, 
          users.name, 
          etudiants.matricule_etudiant,
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
          public.etud_ins_mats, 
          public.etud_scolariser_clas, 
          public.examens, 
          public.creneaux_horaires
        WHERE 
          etudiants.id_user = users.id AND
          etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
          etud_scolariser_clas.id_etudiant = etudiants.id AND
          examens.id_matiere = etud_ins_mats.id_matiere AND
          creneaux_horaires.id = examens.id_creneau AND
          etud_scolariser_clas.id_annee = '$id_annee' AND
          examens.date_examen = '$date' AND
          etud_scolariser_clas.id_classe = '$idClasse' AND
          creneaux_horaires.libelle_creneaux LIKE '%$heure%';
       ");
      
        foreach ($listEtudiant as $key => $value) {
          //echo $value->matricule_etudiant."<br>";
          $sol = array(
            "matricule"         => $value->matricule_etudiant,
            "nom"               => $value->name,
            "prenom"            => $value->prenom,
            "sexe"              => $value->sexe,
            "telephone"         => $value->telephone,
            "regime"            => $value->regime,
            "photo"             => $value->photo
          );
          $path = "images/".$value->photo;
          if(file_exists($path)){
            $sol["photo"] = base64_encode(file_get_contents($path));
            //$sol["photo"]=$dev['photo'];
          }
          $etudiants[] = $sol;
        }
      }
       
      //dump($etudiants);
      return json_encode(compact("etudiants"));
    }
  }
}