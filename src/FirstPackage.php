<?php

namespace LT\FirstPackage;


class Helper
{

    /**
     * @param $price
     * @param int $digit
     * @return float
     */
    public static function price($price, $digit = 2)
    {
        return round($price, $digit);
    }

    public static function vdump($var)
    {
        var_dump($var);
        exit();
    }

}