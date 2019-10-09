<?php

interface IInfo {

    public function do_inform();
    public function Function();
    
}

class Some implements IInfo {

    public function do_inform() {
        echo "This is a Some class\n";
    }
    public function Function()
    {
        echo "This is a Some clas written by swathi\n";
    }
}

$sm = new Some();
$sm->do_inform();
$sm->Function();