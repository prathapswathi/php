<?php

class Sum {

    public function getSum() {
        return 0;
    }

    public function getSum($x) {
        return $x;
    }

    public function getSum($x, $y) {
        return $x + $y;
    }
}

$s = new Sum();
echo $s->getSum() . "\n" ;
echo $s->getSum(5) . "\n" ;
echo $s->getSum(3, 4) . "\n" ;
?>