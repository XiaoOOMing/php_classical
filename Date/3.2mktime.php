<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 14:17
 */
// mktime将时间转为时间戳 2018-09-03 14:20:00
// 时分秒月日年
date_default_timezone_set('prc');
var_dump(mktime('14', '20', '0', '9', '3', '2018'));
var_dump(time());
