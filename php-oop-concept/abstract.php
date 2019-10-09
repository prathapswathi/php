<?php

abstract class Drawing {

    protected $x = 0;
    protected $y = 0;

    public abstract function area();

    public function getCoordinates() {
    
        echo "\$x is $this->x\n";
        echo "\$y is $this->y\n";
    }
}

class Circle extends Drawing {
   
    private $radius;

    public function __construct($x, $y, $r) {
    
        $this->radius = $r;
        $this->x = $x;
        $this->y = $y;
    }

    public function area() {
    
        return $this->radius * $this->radius * pi();
    }

   public function __toString() {
   
       return "Circle, at x: $this->x, y: $this->y, radius: $this->radius";
   }

}

$o = new Circle(12, 45, 22);
echo "$o \n";
echo "Area of the circle: " . $o->area() . "\n";
echo $o->getCoordinates();