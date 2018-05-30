SELECT 
  cursus_accs.code, 
  departements.code_departement, 
  niveaux.libelle_niveau, 
  classes.code_classe, 
  semestres.libelle_semestre, 
  creneaux_horaires.libelle_creneaux, 
  matieres.libelle_matiere, 
  sessions.libelle_session, 
  activites.id
FROM 
  public.niveaux, 
  public.departements, 
  public.cursus_accs, 
  public.classes, 
  public.activite_conc_classes, 
  public.activites, 
  public.examens, 
  public.matieres, 
  public.sessions, 
  public.semestres, 
  public.creneaux_horaires
WHERE 
  classes.id_cursus = cursus_accs.id AND
  classes.id_departement = departements.id AND
  classes.id_niveau = niveaux.id AND
  activite_conc_classes.id_classe = classes.id AND
  activite_conc_classes.id_activite = activites.id AND
  examens.id_activite = activites.id AND
  examens.id_matiere = matieres.id AND
  examens.id_session = sessions.id AND
  semestres.id = activites.id_semestre AND
  creneaux_horaires.id = examens.id_creneau AND
  examens.date_examen = '2018-05-08' AND 
  creneaux_horaires.libelle_creneaux LIKE '%08h%'
ORDER BY
  creneaux_horaires.libelle_creneaux ASC;
