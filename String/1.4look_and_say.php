<?php

function lookandsay($s)
{
    // result init
    $r = '';

    // first string
    $m = $s[0];

    // number
    $n = 1;

    for ($i = 1; $i < strlen($s); $i++) {
        if ($s[$i] == $m) {
            $n++;
        } else {
            $r .= $n.$m;
            $m = $s[$i];
            $n = 1;
        }
    }
    return $r.$n.$m;
}
$s = 1;
for ($i = 0; $i < 10; $i++) {
    $s = lookandsay($s);
    echo $s . PHP_EOL;
}
