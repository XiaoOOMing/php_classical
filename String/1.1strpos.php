<?php

$str = '364216899qq.com';
var_dump(strpos($str, '3'));

var_dump(strpos($str, '@'));

// 注意：结果必须 === false.不能使用 == false!
if (strpos($str, '@') === false) {
    echo 'There was no @ in email address!';
}
