<?php

class Circle {

    public $radius;

    function setRadius($radius) {
        $this->radius = $radius;
    }

    function area() {
        return $this->radius * $this->radius * M_PI;
    }
}

$c = new Circle();
$c->setRadius(5);

echo $c->area(), "\n";
?>