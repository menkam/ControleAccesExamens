<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_enseignant = Role::where('name', 'enseignant')->first();
	    $role_etudiant  = Role::where('name', 'etudiant')->first();
        $role_surveillant  = Role::where('name', 'surveillant')->first();

        $admin = new User();
        $admin->name = 'MENKAM';
        $admin->prenom = 'Francis';
        $admin->photo = 'admin.png';
        $admin->email = 'men_franc@gmail.com';
        $admin->password = bcrypt('123321');
        $admin->save();
        $admin->roles()->attach($role_admin);

	    $admin = new User();
	    $admin->name = 'admin';
        $admin->prenom = 'admin';
        $admin->photo = 'user.png';
	    $admin->email = 'admin@gmail.com';
	    $admin->password = bcrypt('000000');
	    $admin->save();
	    $admin->roles()->attach($role_admin);

        $enseignant = new User();
        $enseignant->name = 'NKENLIFACK';
        $enseignant->prenom = 'Marcelin';
        $enseignant->email = 'marcelin@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'KUATE';
        $enseignant->prenom = 'Victor';
        $enseignant->email = 'victor@gmail.com';
        $enseignant->photo = 'kuate.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'LANDRI';
        $enseignant->prenom = 'Adrian';
        $enseignant->email = 'ensgant3@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'DJIONGO';
        $enseignant->prenom = 'Cedrigue Boris';
        $enseignant->email = 'djiongo@gmail.com';
        $enseignant->photo = 'djiongo.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant2';
        $enseignant->prenom = 'pre_enseignant';
        $enseignant->email = 'test@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant3';
        $enseignant->prenom = 'prenom_enseignant';
        $enseignant->email = 'ensigant4@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant4';
        $enseignant->prenom = 'prenom enseignant';
        $enseignant->email = 'ensigant50@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'NKENLIFACK';
        $enseignant->prenom = 'Marcelin';
        $enseignant->email = 'marcelin0@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'KUATE';
        $enseignant->prenom = 'Victor';
        $enseignant->email = 'victor0@gmail.com';
        $enseignant->photo = 'kuate.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'LANDRI';
        $enseignant->prenom = 'Adrian';
        $enseignant->email = 'ensgant03@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'DJIONGO';
        $enseignant->prenom = 'Cedrigue Boris';
        $enseignant->email = 'djiongo0@gmail.com';
        $enseignant->photo = 'djiongo.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant2';
        $enseignant->prenom = 'pre_enseignant';
        $enseignant->email = 'test0@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant3';
        $enseignant->prenom = 'prenom_enseignant';
        $enseignant->email = 'ensigant40@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant4';
        $enseignant->prenom = 'prenom enseignant';
        $enseignant->email = 'ensigant50@gmail.com';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);





	    $etudiant = new User();
	    $etudiant->name = 'MANFO';
        $etudiant->prenom = 'Alex';
	    $etudiant->photo = 'electro.png';
	    $etudiant->email = 'manfo@gmail.com';
	    $etudiant->password = bcrypt('000000');
	    $etudiant->save();
	    $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user1.png';
        $etudiant->email = 'user1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user11@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user2@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user3@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user4@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user5@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user6@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user7@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user12@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user1dsd@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user1ds@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'user1s@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'users1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'userqs1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'Surveillant';
        $etudiant->prenom = '1';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'surveillant@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'usersqs1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'usersss1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->photo = 'user.png';
        $etudiant->email = 'usersqsqd1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $surveillant = new User();
        $surveillant->name = 'Le Chat';
        $surveillant->prenom = 'Surveillant';
        $surveillant->photo = 'user.png';
        $surveillant->email = 'lechat@gmail.com';
        $surveillant->password = bcrypt('000000');
        $surveillant->save();
        $surveillant->roles()->attach($role_surveillant);
    }
}
