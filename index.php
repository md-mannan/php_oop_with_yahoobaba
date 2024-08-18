<?php

// PHP Access Modefiers

class Base
{
    public $name; //this $variable can be access from anywhere object of class or child class

    public function __construct($name)
    {
        $this->name = $name;
    }

    function display()
    {
        echo "Hello, My Name is " . $this->name . "<br>";
    }
}

$obj = new Base("Mannan");
$obj->display();
