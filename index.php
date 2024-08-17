<?php

class Person
{
    public $name, $age;
    function __construct($name, $age = 18)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        return "User Name is: " . $this->name . " and Age is: " . $this->age . "</br>";
    }
}

$object = new Person('Mannan', 25);
echo $object->show();

$object2 = new Person('Ravi');
echo $object2->show();
