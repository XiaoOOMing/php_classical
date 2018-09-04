<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/4
 * Time: 17:49
 */

function track_times_called()
{
    static $i = 0;
    $i++;
    return $i;
}

var_dump(track_times_called());
var_dump(track_times_called());
var_dump(track_times_called());
