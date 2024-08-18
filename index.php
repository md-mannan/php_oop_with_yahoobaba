<?php

class Parrent
{
    static $name = "Ravi";
}
class child extends Parrent
{
    public static $name = "Mannan";
    public static function getName()
    {
        return parent::$name;
    }
}

echo child::getName(); // Output: Mannan
