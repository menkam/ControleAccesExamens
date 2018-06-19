SELECT 
  users.id, 
  users.name, 
  users.prenom, 
  etudiants.matricule_etudiant, 
  matieres.libelle_matiere, 
  etud_ins_mats.regime, 
  users.telephone, 
  creneaux_horaires.libelle_creneaux, 
  annee_academiques.libelle_annee, 
  etud_ins_mats.id
FROM 
  public.users, 
  public.etudiants, 
  public.etud_scolariser_clas, 
  public.examens, 
  public.etud_ins_mats, 
  public.matieres, 
  public.creneaux_horaires, 
  public.annee_academiques
WHERE 
  etudiants.id_user = users.id AND
  etud_scolariser_clas.id_etudiant = etudiants.id AND
  etud_scolariser_clas.id_annee = annee_academiques.id AND
  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
  etud_ins_mats.id_matiere = matieres.id AND
  matieres.id = examens.id_matiere AND
  creneaux_horaires.id = examens.id_creneau AND
  users.info_codebar = '12838_CM-14IUT0004' AND
  examens.date_examen = '2018-05-10' AND 
  creneaux_horaires.libelle_creneaux LIKE '16h%' AND
  annee_academiques.libelle_annee = '2017-2018';
