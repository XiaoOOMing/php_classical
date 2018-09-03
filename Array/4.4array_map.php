<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 14:35
 */

// 将数组中的每一项交给一个函数来处理
$words = ['hello', 'world', 'php', 'is', 'the', 'best', 'language'];
$lc = array_map('strtoupper', $words);
var_dump($words);
var_dump($lc);
