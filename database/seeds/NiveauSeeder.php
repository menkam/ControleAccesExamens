<?php

use Illuminate\Database\Seeder;
use App\Models\Niveau;
class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Niveau();
        $objet->libelle_niveau = 'I';
        $objet->save();

        $objet = new Niveau();
        $objet->libelle_niveau = 'II';
        $objet->save();


        $objet = new Niveau();
        $objet->libelle_niveau = 'III';
        $objet->save();

    }
}
