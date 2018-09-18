<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/18
 * Time: 9:55
 */
// 查找某个值的位置
$arr = ['red', 'blue', 'black', 'yellow', 'green'];
$position = array_search('black', $arr);
if ($position !== false) {
    var_dump($position); // 2
}
