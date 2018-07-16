<?php

namespace App\Http\Controllers\AndroidApi;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etud_compose_examen;
use App\Http\Controllers\AndroidApi\Etudiants;

class GestionActiviteController extends Controller
{
    

    public function ajouterEtudiantEnSalle(Request $request)
    {
      $date = "18-06-2018";//Fonction::getDate();
      $heure = "08H";//Fonction::getTime("h");
      $annee = '2017-2018';

      if(isset($request->codeBare) && isset($request->numTab) && isset($request->idUser))
      {
        $idSurveillant = $request->idUser;
        $codebare = $request->codeBare;
        $numTab = $request->numTab;
        if($request->numTab == 0)
        {
          $codebare = $request->codeBare;
          $message = "en crours...";
          $statut = "";
          $etudiant;
          $objet = new Etudiants($date,$heure,$codebare);
          if($objet->infos()){
            if($objet->VerifierInscritMatier()){
              if(!$objet->verifierEnSalle()){
                if($objet->getIdExamen()){
                  $objet->ajouterSurListePresence();
                  $message = "Accès autoriser";
                  $statut = 1;
                }
              }else{
                $status = $objet->verifierStatut();
                if($status == 0){
                  $message = "déjà identifier";//fin
                  $statut = 2;
                }else{
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage();
                  $message = "Accès refuser (attention!!!)";//fin
                  $statut = 0;
                }
              }
            }else{
              $message = "pas inscrit en la matière";//fin
              $statut = 0;
            }
          }else{
            $message = "Accès refuser";//fin
            $statut = 0;
          }
          if($objet->allInfos() != null){
            $objet->setAllInfos2("msg",$message);
            $objet->setAllInfos2("statut",$statut);
            $etudiant = $objet->allInfos();
          }else{
            $etudiant[] = array(
              "msg" => $message,
              "statut" => $statut
            );
          }
          //dump($etudiant);
        }

        else if($request->numTab == 1)
        {
          $message = "en crours...";
          $statut = "";
          $etudiant;
          $objet = new Etudiants($date,$heure,$codebare);
          if($objet->infos()){
            if($objet->VerifierInscritMatier()){
              if($objet->verifierEnSalle()){
                $status = $objet->verifierStatut();
                if($status == 0){
                  $objet->setNewStatut("1");
                  $objet->modifierStatut();
                  $message = "cette etudiant a terminé";//fin 
                    $statut = 1;
                }else if($status == 2){
                  $message = "attention!!! vous ête exclus de la classe";//fin  
                  $statut = 0;
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage();
                }else{
                  $message = "cette etudiant a déjà terminer";//fin 
                    $statut = 1;
                }
              }else{
                $message = "attention!!!";//fin 
                $statut = 0;
                $objet->setIdSurveillant($idSurveillant);
                $objet->sentMessage();
              } 
            }else{
              $message = "attention!!!";//fin 
              $statut = 0;
            }       
                    
          }else{
            $message = "pas de cette classe";//fin
            $statut = 0;
          }
          if($objet->allInfos() != null){
            $objet->setAllInfos2("msg",$message);
            $objet->setAllInfos2("statut",$statut);
            $etudiant = $objet->allInfos();
          }else{
            $etudiant[] = array(
              "msg" => $message,
              "statut" => $statut
            );
          }
          //dump($etudiant);
        }

        else if($request->numTab == 2)
        {
          $message = "en crours...";
          $statut = "";
          $etudiant;
          $objet = new Etudiants($date,$heure,$codebare);
          if($objet->infos()){
            if($objet->VerifierInscritMatier()){
              if($objet->verifierEnSalle()){
                $status = $objet->verifierStatut();
                if($status == 0){
                  $objet->setNewStatut("2");
                  $objet->modifierStatut();
                  $message = "cette etudiant est exclus de la classe";//fin 
                    $statut = 1;
                }else if($status == 1){
                  $message = "attention!!! cette etudiant a déjà terminer";//fin  
                  $statut = 1;
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage();
                }else{
                  $message = "déjà exclus de la salle";//fin  
                  $statut = 1;
                }
              }else{
                $message = "attention!!!";//fin 
                $statut = 0;
                $objet->setIdSurveillant($idSurveillant);
                $objet->sentMessage();
              } 
            }else{
              $message = "attention!!!";//fin 
              $statut = 0;
            }       
                    
          }else{
            $message = "pas de cette classe";//fin
            $statut = 0;
          }
          if($objet->allInfos() != null){
            $objet->setAllInfos2("msg",$message);
            $objet->setAllInfos2("statut",$statut);
            $etudiant = $objet->allInfos();
          }else{
            $etudiant[] = array(
              "msg" => $message,
              "statut" => $statut
            );
          }
          //dump($etudiant);          
        }
        if(!empty($etudiant)){

          $photo = $etudiant[0]->photo;
          $id_etudiant = $etudiant[0]->id;
          $matricule_etudiant=$etudiant[0]->matricule_etudiant;
          $name=$etudiant[0]->name;
          $prenom=$etudiant[0]->prenom;
          $date_nais=$etudiant[0]->date_nais;
          $regime=$etudiant[0]->regime;
          $telephone=$etudiant[0]->telephone;
          $statut=$etudiant[0]->statut;
          $msg=$etudiant[0]->msg;
          $libelle_matiere=$etudiant[0]->libelle_matiere;
        }
        return Response()->json(compact(
            'statut',
            'msg',
            'matricule_etudiant',
            'name',
            'prenom',
            'regime',
            'telephone',
            'date_nais',
            'id_etudiant',
            'libelle_matiere',
            'photo'
        ));

        //return json_encode($etudiant);
      }      
    }

    /*public function ajouterEtudiantAyantTerminer(Request $request){
      public $date = "18-06-2018";//Fonction::getDate();
    public $heure = "08H";//Fonction::getTime("h");
    public $annee = '2017-2018';
    public function ajouterEtudiantEnSalle(Request $request)
    {
        //$codeBare = '12838_CM-UDS-14IUT0004';        
        $codeBare = $request->codeBare;
        $idActivite = 1;
        $etudiant = array();
        $etudiant = DB::select("
            SELECT 
              etudiants.matricule_etudiant, 
              users.name, 
              users.prenom, 
              users.photo, 
              etud_ins_mats.regime, 
              matieres.libelle_matiere, 
              creneaux_horaires.libelle_creneaux, 
              etud_compose_examens.id, 
              users.sexe, 
              users.telephone, 
              users.email, 
              annee_academiques.libelle_annee, 
              examens.id as id_examen, 
              etud_scolariser_clas.id as id_etudiant
            FROM 
              public.users, 
              public.etudiants, 
              public.etud_scolariser_clas, 
              public.etud_ins_mats, 
              public.matieres, 
              public.examens, 
              public.etud_compose_examens, 
              public.activites, 
              public.creneaux_horaires, 
              public.annee_academiques
            WHERE 
              etudiants.id_user = users.id AND
              etud_scolariser_clas.id_etudiant = etudiants.id AND
              etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
              matieres.id = etud_ins_mats.id_matiere AND
              examens.id_activite = activites.id AND
              etud_compose_examens.id_etud_ins_mat = etud_ins_mats.id AND
              etud_compose_examens.id_examen = examens.id AND
              creneaux_horaires.id = examens.id_creneau AND
              annee_academiques.id = etud_scolariser_clas.id_annee AND
              users.info_codebar = '$codeBare' AND
              activites.id = '$idActivite' AND
              examens.date_examen = '$this->date' AND
              creneaux_horaires.libelle_creneaux LIKE '%$this->heure%' AND
              annee_academiques.libelle_annee = '$this->annee'
        ");

        if(!empty($etudiant)){
            $photo = '';
            $path = "images/".$etudiant[0]->photo;
            if(file_exists($path)){  $photo = base64_encode(file_get_contents($path)); }

            $etudiant[0]->photo = $photo;
            $id_etudiant = $etudiant[0]->id_etudiant;
            $id_examen = $etudiant[0]->id_examen;
            $exite = DB::select(" select count(id) from etud_compose_examens WHERE  id_examen = '".$id_examen."' AND id_etud_ins_mat = '".$id_etudiant."' AND statut = '0'");
            $matricule_etudiant=$etudiant[0]->matricule_etudiant;
            $name=$etudiant[0]->name;
            $prenom=$etudiant[0]->prenom;
            $libelle_matiere=$etudiant[0]->libelle_matiere;
            $regime=$etudiant[0]->regime;
            $telephone=$etudiant[0]->telephone;
            $libelle_creneaux=$etudiant[0]->libelle_creneaux;
            $libelle_annee=$etudiant[0]->libelle_annee;
            $id_etudiant=$etudiant[0]->id_etudiant;
            $id_examen=$etudiant[0]->id_examen;
            //si l'etudiant à déjà ete identifier
            if($exite[0]->count == 0){
                //Ajout de l'Etudiant identifier dans la table Etud_realise-activite
                Etud_compose_examen::create(['id_examen' => $id_examen, 'id_etud_ins_mat' => $id_etudiant]);
                $statut = 1;
            }
            else $statut = 2;
        }else $statut = 0;
        //dd (compact('etudiant'));
        return Response()->json(compact(
            'statut',
            'matricule_etudiant',
            'name',
            'prenom',
            'libelle_matiere',
            'regime',
            'telephone',
            'libelle_annee',
            'id_etudiant',
            'id_activite',
            'libelle_creneaux',
            'photo'
        ));

        //return json_encode($etudiant);
    }

    public function ajouterEtudiantsExclus(Request $request){

    }*/
}
