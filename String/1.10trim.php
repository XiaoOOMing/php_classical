<?php

$str = ' hello ';
var_dump($str);
var_dump(ltrim($str));
var_dump(rtrim($str));
var_dump(trim($str));

$str2 = '--hello--';
var_dump(trim($str2, '-'));
