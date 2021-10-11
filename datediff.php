<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datediff extends Model
{
    public static function datediff($date1,$date2){
        $date1=date_create($date1);
        $date2=date_create($date2);
        $diff=date_diff($date1,$date2);
        $day = $diff->format("%R%a");
        if($day < 0){
            $day = 0;
        }
        return intval($day);
    }
    public static function datediffnonzero($date1,$date2){
        $date1=date_create($date1);
        $date2=date_create($date2);
        $diff=date_diff($date1,$date2);
        $day = $diff->format("%R%a");
        return intval($day);
    }
}
