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
       $objet->id_option = '1';
       $objet->id_niveau = '1';
       $objet->code_classe = 'GI1';
       $objet->libelle_classe = 'Génie informatique 1';
       $objet->effectif_classe = '45';
       $objet->save();

       $objet = new Classe();
       $objet->id_option = '2';
       $objet->id_niveau = '2';
       $objet->code_classe = 'ISR';
       $objet->libelle_classe = 'Licence Informatique, Réseaux et Télécommunication';
       $objet->effectif_classe = '45';
       $objet->save();

       $objet = new Classe();
       $objet->id_option = '3';
       $objet->id_niveau = '2';
       $objet->code_classe = 'GEL';
       $objet->libelle_classe = 'Génie Electrique';
       $objet->effectif_classe = '45';
       $objet->save();

        $objet = new Classe();
        $objet->id_option = '4';
        $objet->id_niveau = '3';
        $objet->code_classe = 'LIR';
        $objet->libelle_classe = 'Licence Informatique et Réseaux';
        $objet->effectif_classe = '45';
        $objet->save();       
    }
}
