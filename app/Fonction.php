<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    public static function getTime($format){
        $heure = getDate();
        $currentTime = '';
        if($format == "h:m"){
            if(($heure["hours"]+1) < 10 && $heure["minutes"] < 10){
                $currentTime = ("0".($heure["hours"]+1)."h0".$heure["minutes"]);
            }
            if(($heure["hours"]+1) < 10 && $heure["minutes"] > 10){
                $currentTime = ("0".($heure["hours"]+1)."h".$heure["minutes"]);
            }
            if(($heure["hours"]+1) > 10 && $heure["minutes"] < 10){
                $currentTime = (($heure["hours"]+1)."h0".$heure["minutes"]);
            }
            if(($heure["hours"]+1) > 10 && $heure["minutes"] > 10){
                $currentTime = (($heure["hours"]+1)."h".$heure["minutes"]);
            }
        }if($format == "h"){
            if(($heure["hours"]+1) < 10){
                $currentTime = ("0".($heure["hours"]+1)."h");
            }else {
                $currentTime = (($heure["hours"]+1)."h");
            }
        }
        return $currentTime;
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
    }
}
