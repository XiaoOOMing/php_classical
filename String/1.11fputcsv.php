<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 上午10:29
 */

// 在当前文件加中生成CSV格式(传说中的Excel)
function createCSV($filename, $sales)
{
    $fh = fopen($filename, 'w') or die('Can not open ' . $filename);
    foreach ($sales as $sale_line) {
        if (fputcsv($fh, $sale_line) === false) {
            die('Can not write CSV line');
        }
    }
    fclose($fh) or die('Can not close ' . $filename);
}

// 使用方法：
$sales = [
    ['Northeast', '2018-08-01', '2018-08-01', 12.54],
    ['Southeast', '2018-09-01', '2018-09-01', 12.99],
];

$filename = __DIR__ . '/sales.csv';
createCSV($filename, $sales);