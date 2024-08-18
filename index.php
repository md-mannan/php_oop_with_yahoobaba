<?php

class abc
{
    private $con;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'laravel';
    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function Hello()
    {
        echo "Hello this is from Hello()</br>";
    }
    function __destruct()
    {
        mysqli_close($this->con);
    }
}


$test = new abc();
$test->Hello();
echo "hello from constructor</br>";
