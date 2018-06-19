SELECT 
  salle_activites.id, 
  salles.code_salle, 
  salles.libelle_salle, 
  salles.nbre_places
FROM 
  activites, 
  salles, 
  salle_activites
WHERE 
  activites.id = salle_activites.id_activite AND
  salle_activites.id_salle = salles.id AND
  activites.id = '1'
ORDER BY
  salles.code_salle ASC;
