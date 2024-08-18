<?php
// PHP interface implementation

interface A
{
    function hello($name);
}
interface C
{
    function hi($a);
    function bye();
}
class B implements A, C
{
    public function hello($name)
    {
        echo "Hello, $name!<br>";
    }
    public function hi($a)
    {
        echo "Hi, $a!<br>";
    }
    public function bye()
    {
        echo "Good Bye!<br>";
    }
}

$obj = new B();

$obj->hello("John");
$obj->hi("John");
$obj->bye();
