<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 17:37
 */
// usort 定义自己的排序
$tests = ['test1.php', 'test10.php', 'test11.php', 'test2.php'];
usort($tests, function ($a, $b) {
    return strnatcmp($b, $a);
});
var_dump($tests);
