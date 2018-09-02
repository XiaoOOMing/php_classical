<?php

// 生成随机字符串
function rand_str($len = 32, $characers = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM')
{
    // 判断len是否合法
    if ($len < 0 || !is_int($len)) {
        return false;
    }

    $index_min = 0;
    $index_max = strlen($characers) - 1;
    $res = '';

    for ($i = 0; $i < $len; $i++) {
        $res .= $characers[mt_rand($index_min, $index_max)];
    }
    return $res;
}

var_dump(rand_str());
var_dump(rand_str());
var_dump(rand_str(16));
var_dump(rand_str(12));
var_dump(rand_str(-1));