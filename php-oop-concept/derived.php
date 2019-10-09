<?php

class Base {
    function __construct() {
       echo "Construction of Base class\n";
    }
    function hello(){
        echo "hai";
    }
}

class Derived extends Base {
    function __construct() {
        echo "Construction of Derived class \n";
        parent::__construct();
        parent::hello();
    }
}

$obj1 = new Base();
$obj2 = new Derived(); 
?>