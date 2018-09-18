<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/18
 * Time: 10:09
 */
// 已完成的数组 去除重复项
$arr = [1,2,3,4,4,5,2,3];
$arr = array_unique($arr);
//var_dump($arr);

$arr = ['red', 'red', 'green', 'yellow', 'yellow'];
$res = [];
foreach ($arr as $value) {
    $res[$value] = $value;
}
var_dump($res);
var_dump(array_keys($res));
