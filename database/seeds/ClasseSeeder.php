<?php

use Illuminate\Database\Seeder;
use App\Models\Classe;
class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Classe();
        $objet->id_cursus = '3';
        $objet->id_departement = '1';
        $objet->id_niveau = '3';
        $objet->code_classe = 'LIR';
        $objet->libelle_classe = 'Licence Informatique et Réseaux';
        $objet->effectif_classe = '45';
        $objet->save();

       $objet = new Classe();
       $objet->id_cursus = '1';
       $objet->id_departement = '1';
       $objet->id_niveau = '1';
       $objet->code_classe = 'GI1';
       $objet->libelle_classe = 'Génie informatique 1';
       $objet->effectif_classe = '45';
       $objet->save();

       $objet = new Classe();
       $objet->id_cursus = '2';
       $objet->id_departement = '2';
       $objet->id_niveau = '1';
       $objet->code_classe = 'GE';
       $objet->libelle_classe = 'Génie Electrique';
       $objet->effectif_classe = '45';
       $objet->save();

       $objet = new Classe();
       $objet->id_cursus = '3';
       $objet->id_departement = '3';
       $objet->id_niveau = '3';
       $objet->code_classe = 'LIRT';
       $objet->libelle_classe = 'Licence Informatique, Réseaux et Télécommunication';
       $objet->effectif_classe = '45';
       $objet->save();
    }
}
