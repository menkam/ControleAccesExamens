<?php

use Illuminate\Database\Seeder;
use App\Models\Session;
class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Session();
        $objet->libelle_session = 'Normale';
        $objet->save();

        $objet = new Session();
        $objet->libelle_session = 'Rattrapage';
        $objet->save();

        $objet = new Session();
        $objet->libelle_session = 'Contrôle Continu';
        $objet->save();

    }
}
