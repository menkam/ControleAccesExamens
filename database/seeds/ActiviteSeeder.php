<?php

use Illuminate\Database\Seeder;

use App\Models\Activite;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activite = new Activite();
        $activite->id_annee = '1';
        $activite->id_semestre = '6';
        $activite->type_activite = 'Examen';
        $activite->id_niveau = '6';
        $activite->duree = '1';
        $activite->date_debut_activite = '2018-5-20';
        $activite->date_fin_activite = '2018-05-25';
        $activite->save();

        $activite = new Activite();
        $activite->id_annee = '1';
        $activite->id_semestre = '6';
        $activite->type_activite = 'Cours';
        $activite->id_niveau = '6';
        $activite->duree = '1';
        $activite->date_debut_activite = '2018-04-30';
        $activite->date_fin_activite = '2018-05-05';
        $activite->save();

        $activite = new Activite();
        $activite->id_annee = '1';
        $activite->id_semestre = '6';
        $activite->type_activite = 'Cours';
        $activite->id_niveau = '6';
        $activite->duree = '1';
        $activite->date_debut_activite = '2018-05-1';
        $activite->date_fin_activite = '2018-05-05';
        $activite->save();
    }
}