SELECT 
  etudiants.matricule_etudiant, 
  users.name, 
  users.prenom, 
  users.sexe, 
  users.photo, 
  etud_ins_mats.regime, 
  etud_realise_activs.statut, 
  etud_realise_activs.created_at, 
  etud_realise_activs.fin_realisation, 
  creneaux_horaires.libelle_creneaux
FROM 
  activites, 
  etud_realise_activs, 
  etud_ins_mats, 
  etudiants, 
  etud_scolariser_clas, 
  users, 
  examens, 
  creneaux_horaires
WHERE 
  etud_realise_activs.id_activite = activites.id AND
  etud_realise_activs.id_etud_ins_mat = etud_ins_mats.id AND
  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
  etud_scolariser_clas.id_etudiant = etudiants.id AND
  users.id = etudiants.id_user AND
  examens.id_activite = activites.id AND
  creneaux_horaires.id = examens.id_creneau AND
  activites.id = '1' AND 
  examens.date_examen = '2018-05-11' AND 
  creneaux_horaires.libelle_creneaux LIKE '12h%';
