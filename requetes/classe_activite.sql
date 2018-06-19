SELECT 
  activite_conc_classes.id,
  classes.code_classe, 
  classes.libelle_classe
FROM 
  activites, 
  activite_conc_classes, 
  classes
WHERE 
  activites.id = activite_conc_classes.id_activite AND
  activite_conc_classes.id_classe = classes.id AND
  activites.id = '1'
ORDER BY
  classes.code_classe ASC;
