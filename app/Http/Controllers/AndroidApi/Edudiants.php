<?php

namespace App\Http\Controllers\AndroidApi;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Etud_compose_examen;
use App\Models\Mail;

class Etudiants
{
	private $idSurveillant;
	private $msg;
	private $allInfos;
	private $idActivite;
	private $idExamen;
	private $idInscritmat;
	private $idEtudiant;
	private $idCompose;
	private $newStatut;
	private $codeBarre;
	private $date;
	private $heure;
	private $anneeAcad = '2017-2018';

	public function __construct($date,$heure, $codeBarre)
	{
		$this->date = $date;
		$this->heure = $heure;
		$this->codeBarre = $codeBarre;
		//echo ("<p><h1>Constructeur de l'etudiant créer</h1><hr></p>");
	}

	public function infos()
	{
		$infos = DB::select("
			SELECT 
			  etudiants.id, 
			  etudiants.matricule_etudiant, 
			  users.name, 
			  etudiants.diplome_entre, 
			  users.prenom, 
			  users.sexe, 
			  users.date_nais, 
			  users.telephone, 
			  users.email, 
			  users.info_codebar, 
			  users.photo
			FROM 
			  public.users, 
			  public.etudiants
			WHERE 
			  etudiants.id_user = users.id AND
			  users.info_codebar = '$this->codeBarre';
		");
		
		if(!empty($infos)){
			$this->setIdEtudiant($infos[0]->id);
            $photo = '';
            $path = "images/".$infos[0]->photo;
            if(file_exists($path)){  $photo = base64_encode(file_get_contents($path)); }

            $infos[0]->photo = $photo;
            $this->setAllInfos1($infos);
        }

		//echo ("<p><h3>Infromation</h3><hr></p>");
		return ($infos);
	}

	public function VerifierInscritMatier()
	{
		$idEtudiant = $this->idEtudiant();
		$sol = DB::select("
			SELECT 
			  etud_ins_mats.id, 
			  etud_ins_mats.regime,
			  matieres.libelle_matiere
			FROM 
			  public.etud_scolariser_clas, 
			  public.etud_ins_mats, 
			  public.examens, 
			  public.creneaux_horaires, 
			  public.activites, 
			  public.matieres, 
			  public.annee_academiques
			WHERE 
			  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
			  examens.id_matiere = etud_ins_mats.id_matiere AND
			  matieres.id = examens.id_matiere AND
			  creneaux_horaires.id = examens.id_creneau AND
			  activites.id = examens.id_activite AND
			  annee_academiques.id = activites.id_annee AND
			  etud_scolariser_clas.id_etudiant = '$idEtudiant' AND 
			  examens.date_examen = '$this->date' AND 
			  creneaux_horaires.libelle_creneaux LIKE '%$this->heure%' AND 
			  annee_academiques.libelle_annee = '$this->anneeAcad';
		");
		if(!empty($sol)){
			$this->setIdInscritmat($sol[0]->id);
			$this->setAllInfos2("regime",$sol[0]->regime);
			$this->setAllInfos2("libelle_matiere",$sol[0]->libelle_matiere);
		}
		//echo ("<p><h3>inscrit en la matière</h3><hr></p>");
		return $sol;
	}

	public function verifierEnSalle()
	{
		$idEtudInscMat = $this->idInscritmat();
		$sol = DB::select("
			SELECT 
			  etud_compose_examens.id,
			  etud_compose_examens.statut 
			FROM 
			  public.etud_ins_mats, 
			  public.examens, 
			  public.creneaux_horaires, 
			  public.activites, 
			  public.annee_academiques, 
			  public.etud_compose_examens
			WHERE 
			  creneaux_horaires.id = examens.id_creneau AND
			  activites.id = examens.id_activite AND
			  annee_academiques.id = activites.id_annee AND
			  etud_compose_examens.id_etud_ins_mat = etud_ins_mats.id AND
			  etud_compose_examens.id_examen = examens.id AND
			  etud_ins_mats.id = '$idEtudInscMat' AND 
			  examens.date_examen = '$this->date' AND 
			  creneaux_horaires.libelle_creneaux LIKE '%$this->heure%' AND 
			  annee_academiques.libelle_annee = '$this->anneeAcad';
		");
		if(!empty($sol)){
			$this->setIdCompose($sol[0]->id);
			//$this->setAllInfos2("statut",$sol[0]->statut);
		}
		//echo ("<p><h3>en salle</h3><hr></p>");
		return ($sol);
	}

	public function getIdExamen()
	{
		$idEtudInscMat = $this->idInscritmat();
		$sol = DB::select("
			SELECT 
			  examens.id
			FROM 
			  public.examens, 
			  public.etud_ins_mats, 
			  public.creneaux_horaires
			WHERE 
			  etud_ins_mats.id_matiere = examens.id_matiere AND
			  creneaux_horaires.id = examens.id_creneau AND
			  etud_ins_mats.id = '$idEtudInscMat' AND 
			  examens.date_examen = '$this->date' AND 
			  creneaux_horaires.libelle_creneaux LIKE '%$this->heure%';
		");
		if(!empty($sol)){
			$this->setIdExamen($sol[0]->id);
		}
		//echo ("<p><h3>get idExamen</h3><hr></p>");
		return ($sol);
	}

	public function verifierStatut()
	{
		$idCompose = $this->idCompose();
		$sol = DB::select("
			SELECT 
			  etud_compose_examens.statut, 
  			  etud_compose_examens.id_examen
			FROM 
			  public.etud_compose_examens
			WHERE 
			  etud_compose_examens.id = '$idCompose';
		");
		if(!empty($sol)){
			$this->setIdExamen($sol[0]->id_examen);
			return $sol[0]->statut;
		}
		//echo ("<p><h3>vérifier statut</h3><hr></p>");
		
	}

	public function ajouterSurListePresence()
	{
		$id_examen = $this->idExamen();
		$id_etudiant = $this->idEtudiant();
		$sol = Etud_compose_examen::create(['id_examen' => $id_examen, 'id_etud_ins_mat' => $id_etudiant]);
		if(!empty($sol)){
			//$this->setAllInfos2("statut","0");
		}
		
		//echo ("<p><h3>ajouter sur la liste de présence</h3><hr></p>");
		//dump ($sol);
	}

	public function modifierStatut()
	{
		$statut = $this->newStatut();
		$id_examen = $this->idExamen();
		$id_etudiant = $this->idEtudiant();
		$sol = Etud_compose_examen::where([['id_examen',$id_examen], ['id_etud_ins_mat', $id_etudiant]])->update(['statut'=>$statut]);
		if(!empty($sol)){
			//$this->setAllInfos2("statut",$statut);
		}

		//echo ("<p><h3>modifeir statut</h3><hr></p>");
		//dump ($sol);
	}

	public function sentMessage()
	{
		$from = $this->idSurveillant();
		$name = $this->allInfos[0]->name;
		$prenom = $this->allInfos[0]->prenom;
		$matricule = $this->allInfos[0]->matricule_etudiant;
		$date = $this->date;
		$heure = $this->heure;
		$msg = "l'etudiant : <b>$name $prenom</b> <br>Matricule : <b>$matricule</b> <br>a essayé de fauter bizarement <br>le <b>$date</b> à <b>$heure</b>";
		$mail = Mail::create([
			'id_user_from' => $from, 
			'id_user_to' => '1',
			'objet' => 'infraction Etudiant',
			'libelle' => $msg,
			'lue' => '0'
		]);		
		//echo ("<p><h3>message</h3><hr></p>");
		//dump ($mail);
	}


	public function idActivite(){return $this->idActivite; }
	public function idExamen(){return $this->idExamen; }
	public function idEtudiant(){return $this->idEtudiant; }
	public function idInscritmat(){return $this->idInscritmat; }
	public function idCompose(){return $this->idCompose; }
	public function newStatut(){return $this->newStatut; }
	public function msg(){return $this->msg; }
	public function idSurveillant(){return $this->idSurveillant; }
	public function allInfos(){return $this->allInfos; }

	public function setIdActivite($id){$this->idActivite = $id; }
	public function setIdExamen($id){$this->idExamen = $id; }
	public function setIdEtudiant($id){$this->idEtudiant = $id; }
	public function setIdInscritmat($id){$this->idInscritmat = $id; }	
	public function setIdCompose($id){$this->idCompose = $id; }
	public function setNewStatut($statut){$this->newStatut = $statut; }
	public function setMsg($msg){$this->msg = $msg; }
	public function setIdSurveillant($id){$this->idSurveillant = $id; }	
	public function setAllInfos1($tab){$this->allInfos = $tab; }
	public function setAllInfos2($attribut,$valeur){$this->allInfos[0]->$attribut = $valeur;}
}