<?php

namespace App\Http\Controllers\AndroidApi;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etud_compose_examen;
use App\Http\Controllers\AndroidApi\Etudiants;
use App\Fonction;

class GestionActiviteController extends Controller
{
  
    public function ajouterEtudiantEnSalle(Request $request)
    {
      $date = Fonction::getDate();
      $heure = Fonction::getTime("H");
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
                  $message = "Accès autorisé";
                  $statut = 1;
                }
              }else{
                $status = $objet->verifierStatut();
                if($status == 0){
                  $message = "Cet étudiant a déjà été identifié et est autorisé d’accéder en salle";//fin
                  $statut = 2;
                }else{
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage("Il a terminé l’activité et essayé de s’introduire de nouveau en salle");
                  $message = "Accès refusé (attention!!!) un message a été envoyé au manager à cette occasion";//fin
                  $statut = 0;
                }
              }
            }else{
              $message = "Cet étudiant n’est pas inscrit en la matière";//fin
              $statut = 0;
            }
          }else{
            $message = "Les informations de cette personne n’ont pas été trouvées dans la base de données";//fin
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
                  $message = "cet étudiant a terminé";//fin 
                    $statut = 1;
                }else if($status == 2){
                  $message = "Cet étudiant à déjà été exclus de cette activité";//fin  
                  $statut = 2;
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage("exclus de la salle et se présente pour comme ayant terminé");
                }else{
                  $message = "cet étudiant a déjà terminer";//fin 
                  $statut = 1;
                }
              }else{
                $message = "attention!!! étudiant inconnu";//fin 
                $statut = 0;
                $objet->setIdSurveillant($idSurveillant);
                $objet->sentMessage("il ne sait pas fait identifier au début de l’activité mais s'identifie comme ayant terminé");
              } 
            }else{
              $message = "attention!!! étudiant inconnu";//fin 
              $statut = 0;
            }       
                    
          }else{
            $message = "cet étudiant n'est pas de cette classe";//fin
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
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage("Pris en flagrant délire avec document à l’appuis");
                  $message = "cet étudiant vient de se faire exclus de la classe";//fin 
                    $statut = 1;
                }else if($status == 1){
                  $message = "attention!!! cette etudiant a déjà terminer";//fin  
                  $statut = 1;
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage("Cet étudiant a déjà terminé l’activité et pris en flagrant délire");
                }else{                  
                  $objet->setIdSurveillant($idSurveillant);
                  $objet->sentMessage("Cet étudiant a déjà été exclus de l’activité et pris en flagrant délire");
                  $message = "déjà exclus de la salle";//fin  
                  $statut = 1;
                }
              }else{
                $message = "attention!!! cet étudiant n'est pas de la classe";//fin 
                $statut = 0;
                $objet->setIdSurveillant($idSurveillant);
                $objet->sentMessage("Cet étudiant n’est pas de la salle et pris en flagrant délire dans la fraude");
              } 
            }else{
              $message = "attention!!! cet étudiant n'est autorisé d'être en salle";//fin
              $statut = 0;
            }       
                    
          }else{
            $message = "cet étudiant n'est pas de cette classe";//fin
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
        if(!empty($etudiant[0]->photo) && 
          !empty($etudiant[0]->id) && 
          !empty($etudiant[0]->matricule_etudiant &&
          !empty($etudiant[0]->name) &&
          !empty($etudiant[0]->prenom) &&
          !empty($etudiant[0]->date_nais) &&
          !empty($etudiant[0]->regime) &&
          !empty($etudiant[0]->telephone) &&
          !empty($etudiant[0]->statut) &&
          !empty($etudiant[0]->msg) &&
          !empty($etudiant[0]->libelle_matiere)
          )){

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
        }else{
          //echo "ras";
          //$statut=0;
          $msg=$message;
          
          return Response()->json(compact(
              'statut',
              'msg'
          ));
          
        }
        //return json_encode($etudiant);
      }      
    }
}
