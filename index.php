<?php

// PHP Access Modefiers

class Base
{
    protected $name; //this $variable can not access from object of class only from child class or  self class

    public function __construct($name)
    {
        $this->name = $name;
    }

    function display()
    {
        $this->name = "Ravi";
        echo "Hello, My Name is " . $this->name . "<br>";
    }
}

class Child extends Base
{
    function display()
    {

        echo "Hello, My Name is " . $this->name . "<br>";
    }
}

$obj = new Base("Mannan");
// $obj->name = "Mannan"; 
$obj->display();
$obj2 = new Child("Mannan");

$obj2->display();
