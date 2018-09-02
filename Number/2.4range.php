<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 下午8:45
 */

// 生成迭代使用数组
$number = range(3, 9);

foreach ($number as $n) {
    printf("%d squared is %d" . PHP_EOL, $n, $n * $n);
}

// range步长
$arr = range(1,10,2);
var_dump(implode(' ', $arr)); // 1 3 5 7 9