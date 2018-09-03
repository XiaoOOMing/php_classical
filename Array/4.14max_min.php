<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 17:18
 */
// 查询数组中最大值和最小值
$numbers = [10,1,2,20,13,5];
var_dump(max($numbers));
var_dump(min($numbers));

// 降序排列后 $numbers[0]为最大值
arsort($numbers);
var_dump(join(' ', $numbers));

// 升序排列后 $numbers[0]为最小值
asort($numbers);
var_dump(join(' ', $numbers));
