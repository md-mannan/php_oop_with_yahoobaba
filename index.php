<?php


require 'first.php';
require 'second.php';

$first = new first\first();
$first->sayHello();
$second = new second\second();
$second->sayHi();
