<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 17:43
 */
// 交换值 不使用中间变量
$a = 1;
$b = 2;

list($a, $b) = [$b, $a];
var_dump($a, $b);
