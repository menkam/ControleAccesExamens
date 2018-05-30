<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'A administrator User';
	    $role_admin->save();

        $role_enseignant = new Role();
	    $role_enseignant->name = 'enseignant';
	    $role_enseignant->description = 'A Teacher User';
	    $role_enseignant->save();

	    $role_etudiant = new Role();
	    $role_etudiant->name = 'etudiant';
	    $role_etudiant->description = 'A Student User';
	    $role_etudiant->save();

        $role_etudiant = new Role();
        $role_etudiant->name = 'surveillant';
        $role_etudiant->description = 'Surveillant des Examens';
        $role_etudiant->save();

	    $role_visiteur = new Role();
	    $role_visiteur->name = 'visiteur';
	    $role_visiteur->description = 'A Visitor User';
	    $role_visiteur->save();
    }
}
