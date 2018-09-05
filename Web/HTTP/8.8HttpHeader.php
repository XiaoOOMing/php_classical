<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/5
 * Time: 11:11
 */

// 获取Http首部 可以判断设备
echo $_SERVER['HTTP_USER_AGENT'] . PHP_EOL;

// 获取所有首部
$headers = getallheaders();
var_dump($headers);
