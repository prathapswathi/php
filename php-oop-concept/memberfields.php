<?php

class Person {

    public $name = "";
}

$p1 = new Person();
$p1->name = "Jane";

$p2 = new Person();
$p2->name = "Beky";

echo $p1->name . "\n"; 
echo $p2->name . "\n"; 