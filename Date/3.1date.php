<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 14:07
 */

date_default_timezone_set('PRC');
// 获取当前时间
var_dump(date('r'));
var_dump(json_encode(getdate()));
var_dump(json_encode(localtime()));
