<?php
/**
 * Created by PhpStorm.
 * User: shuleiming
 * Date: 2018/9/2
 * Time: 上午11:26
 */

// 根据数组，直接下载CSV
function downloadCSV($sales) {
    // 打开文件句柄
    $output = fopen('php://output', 'w') or die('Can not open file php://output');

    // 高度浏览器这是一个CSV文件
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="sales.csv"');

    // 每行输出
    foreach ($sales as $sale) {
        fputcsv($output, $sale);
    }

    fclose($output) or die('Can not close php://output');
}

$sales = [
    ['Northeast', '2018-08-01', '2018-08-01', 12.54],
    ['Southeast', '2018-09-01', '2018-09-01', 12.99],
    ['Southeast', '2018-09-01', '2018-09-01', 12.92],
    ['Southeast', '2018-09-01', '2018-09-01', 12.98],
];
downloadCSV($sales);