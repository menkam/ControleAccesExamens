<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Fonction
{
    public static function getTime($format){
        $heure = getDate();
        $currentTime = '';
        if($format == "h:m"){
            if(($heure["hours"]+1) < 10 && $heure["minutes"] < 10){
                $currentTime = ("0".($heure["hours"]+1)."H0".$heure["minutes"]);
            }
            if(($heure["hours"]+1) < 10 && $heure["minutes"] > 10){
                $currentTime = ("0".($heure["hours"]+1)."H".$heure["minutes"]);
            }
            if(($heure["hours"]+1) > 10 && $heure["minutes"] < 10){
                $currentTime = (($heure["hours"]+1)."H0".$heure["minutes"]);
            }
            if(($heure["hours"]+1) > 10 && $heure["minutes"] > 10){
                $currentTime = (($heure["hours"]+1)."h".$heure["minutes"]);
            }
        }if($format == "H"){
            if(($heure["hours"]+1) < 10){
                $currentTime = ("0".($heure["hours"]+1)."H");
            }else {
                $currentTime = (($heure["hours"]+1)."H");
            }
        }
        return $currentTime;
        //return "08H";
    }

    public static  function getDate(){
        $date = getDate();
        $currentDate = '';
        if((int)$date["mon"] < 10 && (int)$date["mday"] < 10){
            $currentDate = $date["year"]."-0".$date["mon"]."-0".$date["mday"];
        }
        if((int)$date["mon"] < 10 && (int)$date["mday"] >= 10){
            $currentDate = $date["year"]."-0".$date["mon"]."-".$date["mday"];
        }
        if((int)$date["mon"] >= 10 && (int)$date["mday"] < 10){
            $currentDate = $date["year"]."-".$date["mon"]."-0".$date["mday"];
        }
        if((int)$date["mon"] >= 10 && (int)$date["mday"] >= 10){
            $currentDate = $date["year"]."-".$date["mon"]."-".$date["mday"];
        }
        return $currentDate;
        //return "18-07-2018";
    }

    public static function getIdClasse($idUser){
        $heure = Fonction::getTime("H");
        $date = Fonction::getDate();

        $sol = DB::select("
            SELECT 
              activites.id as id_activite, 
              classes.id as id_classe
            FROM 
              public.activites, 
              public.surveillants, 
              public.examens, 
              public.activite_conc_classes, 
              public.classes, 
              public.creneaux_horaires
            WHERE 
              examens.id_surveillant = surveillants.id AND
              examens.id_activite = activites.id AND
              activite_conc_classes.id_activite = activites.id AND
              classes.id = activite_conc_classes.id_classe AND
              creneaux_horaires.id = examens.id_creneau AND
              surveillants.id_user = '$idUser' AND 
              examens.date_examen = '$date' AND 
              creneaux_horaires.libelle_creneaux LIKE '%$heure%';
        ");
        return $sol;
        //dd($sol);
    }
}