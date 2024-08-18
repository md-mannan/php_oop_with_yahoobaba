<?php
// PHP interface implementation

interface parent1
{
    static function calc($a, $b);
}
interface parent2
{
    static function sub($c, $d);
}
class childClass implements parent1, parent2
{
    public static function calc($a, $b)
    {
        echo "Addition of two numbers: " . ($a + $b) . "</br>";
    }
    public static function sub($c, $d)
    {
        echo "Subtraction of two numbers: " . ($c - $d) . "</br>";
    }
}

// $obj = new childClass();
childClass::calc(5, 80);
childClass::sub(50, 10);
