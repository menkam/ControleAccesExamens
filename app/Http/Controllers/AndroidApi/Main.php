<?php

namespace App\Http\Controllers\AndroidApi;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AndroidApi\Etudiants;
use App\Fonction;

class Main extends Controller
{
	public function test(Request $request){
		$date = Fonction::getDate();
      	$heure = Fonction::getTime("H");
		$newStatut = "1";

		if(isset($request->codeBare) && isset($request->numTab) && isset($request->id))
		{
			$idSurveillant = $request->id;
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
								$message = "déjà identifié";//fin
								$statut = 2;
							}else{
								$objet->setIdSurveillant($idSurveillant);
								$objet->sentMessage();
								$message = "Accès refusé (attention!!!)";//fin
								$statut = 0;
							}
						}
					}else{
						$message = "pas inscrit en la matière";//fin
						$statut = 0;
					}
				}else{
					$message = "Accès refusé";//fin
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
								$message = "cet etudiant a terminé";//fin	
							    $statut = 1;
							}else if($status == 2){
								$message = "attention!!! vous ête exclus de la classe";//fin	
								$statut = 0;
								$objet->setIdSurveillant($idSurveillant);
								$objet->sentMessage();
							}else{
								$message = "cet etudiant a déjà terminer";//fin	
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
								$message = "cet etudiant est exclus de la classe";//fin	
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
			return Response()->json($etudiant);
		}
	}
}