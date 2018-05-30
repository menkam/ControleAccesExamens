SELECT 
  etudiants.matricule_etudiant,
  users.name, 
  users.prenom, 
  users.sexe, 
  etud_ins_mats.regime
FROM 
  public.users, 
  public.etudiants, 
  public.etud_scolariser_clas, 
  public.activites, 
  public.etud_ins_mats, 
  public.matieres, 
  public.examens, 
  public.annee_academiques
WHERE 
  users.id = etudiants.id_user AND
  etudiants.id = etud_scolariser_clas.id_etudiant AND
  etud_scolariser_clas.id = etud_ins_mats.id_scolariser AND
  activites.id_annee = annee_academiques.id AND
  etud_ins_mats.id_matiere = matieres.id AND
  matieres.id = examens.id_matiere AND
  examens.id_activite = activites.id AND
  matieres.id = '1' AND 
  activites.id_semestre = '6' AND 
  examens.id_session = '1' AND 
  annee_academiques.id = '1' AND 
  etud_scolariser_clas.id_classe = '1'
ORDER BY
  users.name ASC, 
  users.prenom ASC;
