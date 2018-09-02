<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 上午11:02
 */

// pack()格式化字符串
$books = [
    ['Elmer Gantry', 'Sinclair Lewis', 1927],
    ['Elmer Gantry Elmer Gantry', 'Sinclair Sinclair Lewis', 1971],
    ['Elmer Elmer Gantry', 'Sinclair Sinclair', 1979],
];

// A30A20A4表示book[0]30长度/book[1]20长度/book[2]4长度
foreach ($books as $book) {
    var_dump(pack('A30A20A4', $book[0], $book[1], $book[2]));
}

echo 'No use pack()' . PHP_EOL;

// 不使用pack()实现
foreach ($books as $book) {
    $title = str_pad(substr($book[0], 0, 30), 30, '.');
    $author = str_pad(substr($book[1], 0, 20), 20, '.');
    $year = str_pad(substr($book[2], 0, 4), 4, '.');
    var_dump("$title$author$year");
}