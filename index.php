<?php

class calculation
{
    public $a, $b, $c;

    public function sum($a, $b)
    {
        $this->c = $this->a = $a + $this->b = $b;
        return $this->c;
    }
    public function product($a, $b)
    {
        $this->c = $this->a = $a * $this->b = $b;
        return $this->c;
    }
}
$obj = new calculation();
echo $obj->sum(10, 20);
echo "</br>";
echo $obj->product(25, 20);
