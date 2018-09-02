<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 下午8:50
 */

// 生成随机数
function pick_color()
{
    return mt_rand(0, 1000);
}

var_dump(pick_color());
var_dump(pick_color());
var_dump(pick_color());

// 使用mt_srand后，随机数将不再变化
var_dump('Use rand seed: mt_srand');
mt_srand(999);
var_dump(pick_color());
var_dump(pick_color());
var_dump(pick_color());