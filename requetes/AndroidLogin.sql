SELECT 
  users.name AS nom, 
  users.prenom, 
  users.sexe, 
  roles.name AS role, 
  users.photo
FROM 
  public.users, 
  public.role_user, 
  public.roles
WHERE 
  role_user.user_id = users.id AND
  role_user.role_id = roles.id AND
  users.email = 'victor@gmail.com' AND 
  roles.name != 'etudiant' AND 
  roles.name != 'visiteur' AND 
  users.password = '$2y$10$svv5byU003Jow8psT5hNoeO.Any3lDn.gUdGnXS00ec/muM8Zs92a';
