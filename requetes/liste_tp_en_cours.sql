SELECT 
  cursus_accs.code, 
  departements.code_departement, 
  classes.code_classe, 
  semestres.libelle_semestre, 
  activites.id, 
  creneaux_horaires.libelle_creneaux, 
  matieres.libelle_matiere, 
  users.name, 
  users.prenom, 
  enseignants.grade
FROM 
  public.departements, 
  public.cursus_accs, 
  public.classes, 
  public.activite_conc_classes, 
  public.activites, 
  public.matieres, 
  public.semestres, 
  public.creneaux_horaires, 
  public.tps, 
  public.enseignants, 
  public.users
WHERE 
  classes.id_cursus = cursus_accs.id AND
  classes.id_departement = departements.id AND
  activite_conc_classes.id_classe = classes.id AND
  activite_conc_classes.id_activite = activites.id AND
  semestres.id = activites.id_semestre AND
  creneaux_horaires.id = tps.id_creneau AND
  tps.id_activite = activites.id AND
  tps.id_matiere = matieres.id AND
  enseignants.id = tps.id_enseigant AND
  users.id = enseignants.id_user AND
  tps.date_tp = '2018-05-08' AND 
  creneaux_horaires.libelle_creneaux LIKE '%09h%'
ORDER BY
  creneaux_horaires.libelle_creneaux ASC;
