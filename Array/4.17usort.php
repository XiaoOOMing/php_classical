<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/3
 * Time: 17:37
 */
// usort 定义自己的排序
$tests = ['test1.php', 'test10.php', 'test11.php', 'test2.php'];
usort($tests, function ($a, $b) {
    return strnatcmp($b, $a);
});
var_dump($tests);

// usort定义一个日期排序
function date_sort($a, $b)
{
    list($a_year, $a_month, $a_day) = explode('/', $a);
    list($b_year, $b_month, $b_day) = explode('/', $b);

    if ($a_year > $b_year) return 1;
    if ($b_year > $a_year) return -1;

    if ($a_month > $b_month) return 1;
    if ($b_month > $a_month) return -1;

    if ($a_day > $b_day) return 1;
    if ($b_day > $a_day) return -1;

    return 0;
}

$dates = ['2018/12/14', '2001/08/10', '1999/07/08'];
usort($dates, 'date_sort');
var_dump($dates);

// 使用方法而不是函数自定义排序
class Dates {
    public function date_sort($a, $b)
    {
        return strcmp($a, $b);
    }
}

$date = new Dates();
$dates = ['2018/12/14', '2001/08/10', '1999/07/08'];
usort($dates, [$date, 'date_sort']);
var_dump($dates);
