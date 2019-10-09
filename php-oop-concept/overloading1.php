<?php

class Sum {
    //php not allow the same name overloading without func_get_args();


    public function getSum() {
        return 0;
    }

    public function getSum1($x) {
        return $x;
    }

    public function getSum2($x, $y) {
        return $x + $y;
    }
}

$s = new Sum();
echo $s->getSum() . "\n" ;
echo $s->getSum1(5) . "\n" ;
echo $s->getSum2(3, 4) . "\n" ;
?>