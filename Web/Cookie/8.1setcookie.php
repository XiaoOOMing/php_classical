<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/5
 * Time: 10:51
 */

date_default_timezone_set('PRC');
// 参数1 cookie名
// 参数2 cookie值
// 参数3 到期的时间戳
// 参数4 路径
// 参数5 域名
setcookie('flavor', 'chocolate chip', time() + 100, '/');
