SELECT 
  examens.id, 
  matieres.libelle_matiere, 
  creneaux_horaires.libelle_creneaux, 
  users.name, 
  users.prenom, 
  departements.libelle_departement, 
  examens.id_session, 
  activites.id_annee, 
  activites.id_semestre, 
  activites.id_niveau, 
  activites.date_debut_activite, 
  activites.date_fin_activite, 
  activites.type_activite, 
  examens.date_examen
FROM 
  examens, 
  matieres, 
  creneaux_horaires, 
  surveillants, 
  users, 
  ens_chef_dpts, 
  departements, 
  activites,
  sessions
WHERE 
  examens.id_matiere = matieres.id AND
  examens.id_creneau = creneaux_horaires.id AND
  examens.id_surveillant = surveillants.id AND
  examens.id_ens_chef_dpt = ens_chef_dpts.id AND
  examens.id_activite = activites.id AND
  surveillants.id_user = users.id AND
  ens_chef_dpts.id_departement = departements.id AND
  sessions.id = examens.id_session AND
  activites.id = '1' AND 
  ens_chef_dpts.id_enseignant = '1'
ORDER BY
  activites.id_annee ASC, 
  activites.date_debut_activite ASC, 
  creneaux_horaires.libelle_creneaux ASC;
