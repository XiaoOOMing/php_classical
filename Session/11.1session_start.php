<?php
// session_start 不能忘
session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}
$_SESSION['visits']++;
echo "You have visited here {$_SESSION['visits']} times.";
