<?php

abstract class Being { 

    protected $isAlive = true;
   
    public function isAlive() {
    
        if ($this->isAlive) {
            echo "Being is alive\n";
        } else {
            echo "Being is not alive\n";
        }
    }

    public function kill() {
    
        $this->isAlive = false;
    }
}

abstract class Animal extends Being {

    protected $age;

    public function __construct($age) {
        $this->age = $age;
    }

    protected function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class Cat extends Animal {

    private $name;

    public function __construct($name, $age) {
        $this->name = $name;
        parent::__construct($age);
    }

    public function getName() {
    
        return $this->name;
    }
}

$cat = new Cat("Cici", 4);
$cat->isAlive();
echo $cat->getName() . " is " .  $cat->getAge() . " years old\n";
$cat->kill();
$cat->isAlive();