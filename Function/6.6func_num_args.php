<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 18:09
 */

function mean()
{
    $size = func_num_args();
    var_dump('params count:' . $size);
    for ($i = 0; $i < $size; $i++) {
        var_dump(func_get_arg($i));
    }

    foreach (func_get_args() as $vo) {
        var_dump($vo);
    }
}

mean(1,2,3,4);
