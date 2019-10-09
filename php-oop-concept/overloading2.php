<?php

class Sum {

    public function getSum() {
        $sum=0;
        $args = func_get_args();

        if (empty($args)) return 0;

        foreach ($args as $arg) {
            $sum += $arg;
        }

        return $sum;
    }
}

$s = new Sum();
echo $s->getSum() . "\n" ;
echo $s->getSum(5) . "\n" ;
echo $s->getSum(3, 4) . "\n" ;
echo $s->getSum(3, 4, 7) . "\n" ;
?>