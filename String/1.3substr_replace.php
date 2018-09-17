<?php
// 字符串替换
// 从第几个字符开始，多少长度，替换为xxx内容。
$phone = '13261675306';
var_dump(substr_replace($phone, '****', 3, 4)); // result: 132****5306
