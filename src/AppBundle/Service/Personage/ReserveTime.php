<?php
/**
 * Created by PhpStorm.
 * User: wilder11
 * Date: 31/01/18
 * Time: 14:51
 */

namespace AppBundle\Service\Personage;


class ReserveTime
{

    public function convertDetail(int $reserveTime) : array
    {

        // Hours
        if ($reserveTime > 3599){
            $reserveHour = floor($reserveTime / 3600);
            $reserveTime -= $reserveHour * 3600;
         } else {
            $reserveHour = 0;
        }

        // Minutes
        if ($reserveTime > 59){
            $reserveMinute = floor($reserveTime / 60);
            $reserveTime -= $reserveMinute * 60;
         } else {
            $reserveMinute = 0;
        }

        // Seconds
        if ($reserveTime > 0){
            $reserveSecond = $reserveTime;
         } else {
            $reserveSecond = 0;
        }

        // Arrondir au >
//        $reserveHour = number_format($reserveHour,0);
//        $reserveMinute = number_format($reserveMinute,0);
//        $reserveSecond = number_format($reserveSecond,0);


        $reserveTime = [$reserveHour, $reserveMinute, $reserveSecond];

        return $reserveTime;

    }
}