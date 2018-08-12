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
        $objet->libelle_semestre = 'Semestre 1';
        $objet->save();

        $objet = new Semestre();
        $objet->libelle_semestre = 'Semestre 2';
        $objet->save();
    }
}
