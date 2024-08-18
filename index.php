<?php
// PHP interface implementation

interface parent1
{
    function calc($a, $b);
}
interface parent2
{
    function sub($c, $d);
}
class childClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo "Addition of two numbers: " . ($a + $b) . "</br>";
    }
    public function sub($c, $d)
    {
        echo "Subtraction of two numbers: " . ($c - $d) . "</br>";
    }
}

$obj = new childClass();
$obj->calc(5, 80);
$obj->sub(50, 10);
