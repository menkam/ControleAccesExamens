<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\phpqrcode\QRcode;
//use App\phpqrcode\qrlib;

class CodeBarre extends Model
{
  
    public static function generer($data,$level,$size)
    {
        //$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

        //$PNG_WEB_DIR = 'phpqrcode/temp/';
        $PNG_TEMP_DIR = 'phpqrcode/temp/';
        //include "phpqrcode/qrlib.php";
        //require "phpqrcode/phpqrcode.php";    

        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);

        $errorCorrectionLevel = $level;

        $matrixPointSize = $size;

        $filename = $PNG_TEMP_DIR.'codeBarre.png';

        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 0);
    }
}  