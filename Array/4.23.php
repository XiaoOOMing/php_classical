<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 17:24
 */
// 计算并集
function union($a, $b)
{
    return array_merge($a, $b);
}

// 计算交集
function intersection($a, $b)
{
    return array_intersect($a, $b);
}

// 差集
function diff($a, $b)
{
    return array_diff($a, $b);
}

// 对称差
function merge_diff($a, $b)
{
    return array_merge(array_diff($a, $b), array_diff($b, $a));
}
