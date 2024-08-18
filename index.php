<?php


class abc
{
    function first()
    {
        echo "Hello from first function\n";
        return $this;
    }
    function second()
    {
        echo "Hello from second function\n";
        return $this;
    }
    function third()
    {
        echo "Hello from third function\n";
        return $this;
    }
}

$test = new abc();
$test->first()->second()->third();
