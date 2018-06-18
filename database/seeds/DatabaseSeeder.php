<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
	{
	   // Role comes before User seeder here.
	    $this->call(RoleTableSeeder::class);

	    // User seeder will use the roles above created.
	    $this->call(UserTableSeeder::class);

        // Activity seeder created.
        $this->call(ActiviteSeeder::class);

        $this->call(MatiereSeeder::class);
        $this->call(Cursus_accSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(Ens_chef_dptSeeder::class);
        $this->call(EnseignatSeeder::class);
        $this->call(EtudiantSeeder::class);
        $this->call(ExamenSeeder::class);
        $this->call(SalleSeeder::class);
        $this->call(TpSeeder::class);
        $this->call(SurveillantSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(SessionSeeder::class);

        $this->call(ClasseSeeder::class);
        $this->call(NiveauSeeder::class);
        $this->call(CoursSeeder::class);
        
        //$this->call(Etud_ins_matSeeder::class);
        //$this->call(Etud_realise_activSeeder::class);
        //$this->call(Etud_scolriser_clasSeeder::class);
        //$this->call(Activite_conc_classeSeeder::class);
        //$this->call(Annee_academiqueSeeder::class);
        //$this->call(Creneaux_horaireSeeder::class);
        //$this->call(Salle_ActiviteSeeder::class);

    }
}
