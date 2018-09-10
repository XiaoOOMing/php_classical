<?php
// session_start 不能忘
session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}
$_SESSION['visits']++;
// 定时修改会话
if (!isset($_SESSION['generated']) || $_SESSION['generated'] < (time() - 5)) {
    session_regenerate_id();
    $_SESSION['generated'] = time();
}
echo "You have visited here {$_SESSION['visits']} times.";
echo $_SESSION['generated'];
