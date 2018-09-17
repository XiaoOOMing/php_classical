<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/11
 * Time: 14:01
 * Description: File operations
 */


$file_path = __DIR__ . '/data.txt';
$content = 'Hello PHP!' . PHP_EOL;

// fopen and fwrite
$fh = fopen($file_path, 'w+') or die('Can not open file');
if (fwrite($fh, $content) == -1) {
    die('Can not write data');
}
fclose($fh);
