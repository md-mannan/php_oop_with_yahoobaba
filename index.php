<?php
trait hello
{
    function sayhello()
    {
        echo "Hello from Hello trait";
    }
}
trait hi
{
    function sayhello()
    {
        echo "Hello from Hi trait";
    }
}

class baseclass
{
    use hello, hi {
        hello::sayhello insteadof hi;
        hi::sayhello as sayHi;
    }
}

$obj = new baseclass();
$obj->sayhello();
echo "</br>";
$obj->sayHi();
