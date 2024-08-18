<?php
trait test
{
    function sayhelo()
    {
        echo "Hello from trait";
    }
}

class MyClass
{
    use test;
    function sayhelo()
    {
        echo "Hello from MyClass";
    }
}
class child extends MyClass
{
    use test;
    // function sayhelo()
    // {
    //     echo "Hello from child";
    // }
}


$obj = new child();

$obj->sayhelo(); // Output: Hello from child