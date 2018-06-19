<?php

use Illuminate\Database\Seeder;
use App\Models\Ens_chef_dpt;

class Ens_chef_dptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Ens_chef_dpt();
        $objet->id_enseignant = '1';
        $objet->id_departement = '1';
        $objet->date_debut_diriedpt = '2012-05-03';
        $objet->save();
    }
}
