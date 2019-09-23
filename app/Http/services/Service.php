<?php

namespace App\Http\services;

class service

{

    protected static $services = [

        "Biometrics and  Access Control" => "bac",
        "CCTV camera" => "cctv",
        "Fire Alarm" => "fa",
        "Intercom" => "im",
        "plumbers" => "ps",
        "House renting" => "hr"


    ];

    public static function all()
    {
        return array_keys(static::$services);
    }
}
