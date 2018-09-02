<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 上午10:52
 */

// 读取Excel文件
function getCSV($filename) {
    $res = [];
    $fp = fopen($filename, 'r') or die('Can not open ' . $filename);
    while ($csv_line = fgetcsv($fp)) {
        array_push($res, $csv_line);
    }

    fclose($fp) or die('Can not close ' . $filename);
    return $res;
}

$filename = __DIR__ . '/sales.csv';
$excel = getCSV($filename);
var_dump($excel);