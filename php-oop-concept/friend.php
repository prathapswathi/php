<?php

class Friend {

    private $born;
    private $name;

    function __construct($name, $born) {
        $this->name = $name;
        $this->born = $born;
    }

    function getInfo() {
        echo "My friend $this->name was born in $this->born\n";
    }
}

$friend = new Friend("Monika", 1990);
$friend->getInfo();