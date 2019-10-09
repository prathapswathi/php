<?php

class Person {

    public $name = "";
    private $age;
}

$p = new Person();
$p->name = "Jane";
#$p->age = 17;

echo $p->name . "\n";
#echo $p->age . "\n";
?>