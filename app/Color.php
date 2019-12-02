<?php

namespace App;

class Color
{
    public static function lighten($hex)
    {
        $adjustment = 130;

        $hex = str_replace('#', '', $hex);   //Remove # from string
        $colors = str_split($hex, 2); //split values into three channels
        $adjusted_value = '#';

        foreach ($colors as $color) {
            $color = hexdec($color); //convert to decimal
            $color = max(0, min(255, $color + $adjustment)); //perform adjustment
            $adjusted_value .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); //make two character hex code
        }

        return $adjusted_value;
    }
}
