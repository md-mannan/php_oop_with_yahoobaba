<?php

// abastract class

abstract class Base
{
    public $name;
    abstract public function calc($a, $b);
}

class Child extends Base
{
    public $name = "Ravi";
    public function calc($a, $b)
    {
        echo  $a + $b;
    }
}

$obj = new Child();
$obj->calc(10, 20);
