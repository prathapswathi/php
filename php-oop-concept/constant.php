<?php

class Math {

    const PI = 3.14159265359;

    public function getPI() {
        echo self::PI;
    }
}

$math = new Math();

echo Math::PI, "\n";
echo $math->getPI(), "\n";
?>