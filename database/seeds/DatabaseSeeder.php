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

        //$this->call(Activite_conc_classeSeeder::class);
        //$this->call(ActiviteSeeder::class);
        $this->call(Annee_academiqueSeeder::class);
        $this->call(ClasseSeeder::class);
        //$this->call(CoursSeeder::class);
        $this->call(Creneaux_horaireSeeder::class);
        $this->call(Cursus_accSeeder::class);
        $this->call(Cursus_dptSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(DomaineSeeder::class);
        $this->call(Ens_chef_dptSeeder::class);
        $this->call(EnseignatSeeder::class);
        $this->call(Etud_ins_matSeeder::class);
        $this->call(Etud_scolriser_clasSeeder::class);
        $this->call(EtudiantSeeder::class);
        //$this->call(ExamenSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(MentionSeeder::class);
        $this->call(NiveauSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(ParcourSeeder::class);
        $this->call(RoleTableSeeder::class);
        //$this->call(Salle_ActiviteSeeder::class);
        $this->call(SalleSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(SurveillantSeeder::class);
        //$this->call(TpSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
