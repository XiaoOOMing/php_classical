<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 下午9:04
 */

// 具有偏向性的随机数
function rand_weighted($numbers)
{
    // 生成权重
    $total = 0;
    foreach ($numbers as $number => $weight) {
        $total += $weight;
        $distribution[$number] = $total;
    }
    // 随机总数
    $rand = mt_rand(0, $total - 1);

    // 获得偏向随机数
    foreach ($distribution as $number => $weight) {
        if ($rand < $weight) return $number;
    }
}

$ads = [
    'ford' => 1234, // 概率最低
    'att' => 43424, // 概率最高
    'ibm' => 16822,
];

var_dump(rand_weighted($ads));
var_dump(rand_weighted($ads));
var_dump(rand_weighted($ads));

// yield 优化代码
function incremental_total($numbers)
{
    $total = 0;
    foreach ($numbers as $number=> $weight) {
        $total += $weight;
        yield $number => $total;
    }
}

function rand_weight_generator($numbers) {
    $total = array_sum($numbers);
    $rand = mt_rand(0, $total - 1);
    foreach (incremental_total($numbers) as $number => $weight) {
        if ($rand < $weight) return $number;
    }
}

var_dump(rand_weight_generator($ads));
var_dump(rand_weight_generator($ads));
var_dump(rand_weight_generator($ads));