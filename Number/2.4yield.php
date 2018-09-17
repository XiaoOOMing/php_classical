<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 下午9:19
 */

// yield实现对象迭代
function xsquare($start, $stop)
{
    if ($start < $stop) {
        for ($i = $start; $i <= $stop; $i++) {
            yield $i => $i * $i;
        }
    } else {
        for ($i = $start; $i >= $stop; $i--) {
            yield $i => $i * $i;
        }
    }
}

foreach (xsquare(9, 1) as $key => $val) {
    var_dump($key . '=>' . $val);
}
