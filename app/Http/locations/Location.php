<?php

namespace App\Http\locations;

class location

{
    protected static $locations = [
        "kololo" => "kl",
        "Kampala Road" => "kl",
        "Nakasero" => "nk",
        "Mbale" => "mb",
        "Tororo" => "tr",
        "Nansana" => "na",
        "Ndemba" => "nd",
        "Gulu" => "gl",
        "Nakawa" => "na",
        "Arua" => "aa",
        "Buloba" => "ba",
        "Ntinda" => "nt",
        "Kira" => "ka",
        "Kireka" => "ki"

    ];

    public static function all()
    {
        return array_keys(static::$locations);
    }
}
