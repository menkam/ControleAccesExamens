<?php

use Illuminate\Database\Seeder;
use App\Models\Semestre;
class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD1';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD1&2';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD2';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD3';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD3&4';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD5';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD5&6';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'LMD6';
        $objet->save();
    }
}
