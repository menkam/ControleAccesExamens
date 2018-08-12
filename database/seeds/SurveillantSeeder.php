<?php

use Illuminate\Database\Seeder;
use App\Models\Surveillant;
class SurveillantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Surveillant();
        $objet->id_user = '9';
        $objet->save();

        $objet = new Surveillant();
        $objet->id_user = '10';
        $objet->save();
    }
}
