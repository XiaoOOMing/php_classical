<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 14:54
 */

// 查询数组是否包含某个值
$book_collections = ['js', 'java', 'python', 'php', 'es6', 'php demo'];
$book = 'php demo';

if (in_array($book, $book_collections)) {
    echo 'Own it' . PHP_EOL;
} else {
    echo 'Need it' . PHP_EOL;
}

// 交换数组的键和值，来查询数组是否有某个值，比in_array()速度快
$book_collections = array_flip($book_collections);
if (isset($book_collections[$book])) {
    echo 'Own it' . PHP_EOL;
} else {
    echo 'Need it' . PHP_EOL;
}
