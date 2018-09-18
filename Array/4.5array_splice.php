<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/18
 * Time: 9:31
 */
// 删除元素
$arr = ['red', 'blue', 'black', 'yellow', 'green'];
array_splice($arr,2, 1);
var_dump($arr);
