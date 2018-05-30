<?php

use Illuminate\Database\Seeder;
use App\Models\Departement;
class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Departement();
        $objet->code_departement = 'GI';
        $objet->libelle_departement = 'Génie Informatique';
        $objet->save();

        $objet1 = new Departement();
        $objet1->code_departement = 'GC';
        $objet1->libelle_departement = 'génie Civil';
        $objet1->save();

        $objet2 = new Departement();
        $objet2->code_departement = 'GE';
        $objet2->libelle_departement = 'Génie Electrique';
        $objet2->save();

        $objet3 = new Departement();
        $objet3->code_departement = 'GMI';
        $objet3->libelle_departement = 'Génie Mécanique et Industrielle';
        $objet3->save();

        $objet4 = new Departement();
        $objet4->code_departement = 'GTR';
        $objet4->libelle_departement = 'Génie des Télécommunications et Réseaux';
        $objet4->save();

        $objet5 = new Departement();
        $objet5->code_departement = 'GTEE';
        $objet5->libelle_departement = 'Génie Thermique Et Environnementale';
        $objet5->save();
    }
}
