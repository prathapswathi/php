<?php

class Base {
    
    public $name = "Base";
    protected $id = 6124;
    #private $is_defined = "yes"; 
    protected $is_defined = "no";

}

class Derived extends Base {

    public function info() {
        echo "This is Derived class\n";
        echo "Members inherited: \n";

        echo $this->name . "\n";
        echo $this->id . "\n";
        echo $this->is_defined . "\n";
    }
}

$derived = new Derived();
$derived->info();
?>