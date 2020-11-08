<?php

namespace APP;

class Speedometer
{
    public static function convertKmToMiles($value) : float
    {
        return $value * 0.6215;
    }

    public static function convertMilesToKm($value) : float
    {
        return $value * 1.609;
    }
}