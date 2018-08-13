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
        $admin->date_nais = '1995-02-20';
        $admin->sexe = 'M';
        $admin->telephone = '670256150';
        $admin->info_codebar = '1_CM-UDS-160002';
        $admin->photo = 'men_franc.png';
        $admin->email = 'men_franc@gmail.com';
        $admin->password = bcrypt('123321');
        $admin->save();
        $admin->roles()->attach($role_admin);

	    $admin = new User();
	    $admin->name = 'admin';
        $admin->prenom = 'admin';
        $admin->date_nais = '1995-02-20';
        $admin->sexe = 'M';
        $admin->telephone = '67xxxxxxx';
        $admin->info_codebar = '2_CM-UDS-160002';
        $admin->photo = 'admin.png';
	    $admin->email = 'admin@gmail.com';
	    $admin->password = bcrypt('000000');
	    $admin->save();
	    $admin->roles()->attach($role_admin);

        $enseignant = new User();
        $enseignant->name = 'NKENLIFACK';
        $enseignant->prenom = 'Marcelin';
        $enseignant->email = 'marcelin@gmail.com';
        $enseignant->date_nais = '1975-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '3_CM-UDS-160003';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'KUATE';
        $enseignant->prenom = 'Victor';
        $enseignant->email = 'victor@gmail.com';
        $enseignant->date_nais = '1985-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '4_CM-UDS-160004';
        $enseignant->photo = 'kuate.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'LANDRI';
        $enseignant->prenom = 'Adrian';
        $enseignant->email = 'ensgant3@gmail.com';
        $enseignant->date_nais = '1975-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '5_CM-UDS-160005';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'DJIONGO';
        $enseignant->prenom = 'Cedrigue Boris';
        $enseignant->email = 'djiongo@gmail.com';
        $enseignant->date_nais = '1985-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '6_CM-UDS-160006';
        $enseignant->photo = 'djiongo.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant2';
        $enseignant->prenom = 'pre_enseignant';
        $enseignant->email = 'test@gmail.com';
        $enseignant->date_nais = '1975-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '7_CM-UDS-160007';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);

        $enseignant = new User();
        $enseignant->name = 'enseignant3';
        $enseignant->prenom = 'prenom_enseignant';
        $enseignant->email = 'ensigant4@gmail.com';
        $enseignant->date_nais = '1975-02-20';
        $enseignant->sexe = 'M';
        $enseignant->telephone = '67xxxxxxx';
        $enseignant->info_codebar = '8_CM-UDS-160008';
        $enseignant->photo = 'user.png';
        $enseignant->password = bcrypt('000000');
        $enseignant->save();
        $enseignant->roles()->attach($role_enseignant);



        $surveillant = new User();
        $surveillant->name = 'ZOLO';
        $surveillant->prenom = 'Rostand';
        $surveillant->email = 'Zrostand@gmail.com';
        $surveillant->date_nais = '1975-02-20';
        $surveillant->sexe = 'M';
        $surveillant->telephone = '67xxxxxxx';
        $surveillant->info_codebar = '9_CM-UDS-160009';
        $surveillant->photo = 'user.png';
        $surveillant->password = bcrypt('000000');
        $surveillant->save();
        $surveillant->roles()->attach($role_surveillant);

        $surveillant = new User();
        $surveillant->name = 'TCHINDA';
        $surveillant->prenom = 'Valentin';
        $surveillant->photo = 'user.png';
        $surveillant->email = 'Tvalentin@gmail.com';
        $surveillant->date_nais = '1975-02-20';
        $surveillant->sexe = 'M';
        $surveillant->telephone = '67xxxxxxx';
        $surveillant->info_codebar = '10_CM-UDS-1600010';
        $surveillant->password = bcrypt('000000');
        $surveillant->save();
        $surveillant->roles()->attach($role_surveillant);





	    $etudiant = new User();
	    $etudiant->name = 'MANFO'; 
        $etudiant->prenom = 'Alex';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '11_CM-UDS-16IUT0001';
	    $etudiant->photo = 'electro.png';
	    $etudiant->email = 'manfo@gmail.com';
	    $etudiant->password = bcrypt('000000');
	    $etudiant->save();
	    $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'F';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '12_CM-UDS-16IUT0002';
        $etudiant->photo = 'etudiant1.jpg';
        $etudiant->email = 'user1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '13_CM-UDS-16IUT0003';
        $etudiant->photo = 'etudiant2.jpg';
        $etudiant->email = 'user11@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '14_CM-UDS-16IUT0004';
        $etudiant->photo = 'etudiant3.jpg';
        $etudiant->email = 'user2@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '15_CM-UDS-16IUT0005';
        $etudiant->photo = 'etudiant4.jpg';
        $etudiant->email = 'user3@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '16_CM-UDS-16IUT0006';
        $etudiant->photo = 'etudiant5.jpg';
        $etudiant->email = 'user4@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '17_CM-UDS-16IUT0007';
        $etudiant->photo = 'etudiant6.jpg';
        $etudiant->email = 'user5@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '18_CM-UDS-16IUT0008';
        $etudiant->photo = 'etudiant7.jpg';
        $etudiant->email = 'user6@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '19_CM-UDS-16IUT0009';
        $etudiant->photo = 'etudiant8.jpg';
        $etudiant->email = 'user7@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '20_CM-UDS-16IUT0010';
        $etudiant->photo = 'etudiant9.jpg';
        $etudiant->email = 'user12@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '21_CM-UDS-16IUT0011';
        $etudiant->photo = 'etudiant10.jpg';
        $etudiant->email = 'user1dsd@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '22_CM-UDS-16IUT0012';
        $etudiant->photo = 'etudiant11.jpg';
        $etudiant->email = 'user1ds@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '23_CM-UDS-16IUT0013';
        $etudiant->photo = 'etudiant12.jpg';
        $etudiant->email = 'user1s@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '24_CM-UDS-16IUT0014';
        $etudiant->photo = 'etudiant13.jpg';
        $etudiant->email = 'users1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '25_CM-UDS-16IUT0015';
        $etudiant->photo = 'etudiant14.jpg';
        $etudiant->email = 'userqs1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '26_CM-UDS-16IUT0016';
        $etudiant->photo = 'etudiant15.jpg';
        $etudiant->email = 'usersqs1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '27_CM-UDS-16IUT0017';
        $etudiant->photo = 'etudiant16.jpg';
        $etudiant->email = 'usersss1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        $etudiant = new User();
        $etudiant->name = 'user1';
        $etudiant->prenom = 'prenom';
        $etudiant->date_nais = '1995-02-20';
        $etudiant->sexe = 'M';
        $etudiant->telephone = '67xxxxxxx';
        $etudiant->info_codebar = '28_CM-UDS-16IUT0018';
        $etudiant->photo = 'etudiant17.jpg';
        $etudiant->email = 'usersqsqd1@gmail.com';
        $etudiant->password = bcrypt('000000');
        $etudiant->save();
        $etudiant->roles()->attach($role_etudiant);

        
    }
}
