<?php
// 打开会话
session_start();

// 确定step
if ($_SERVER['REQUEST_METHOD'] == 'GET' || !isset($_POST['step'])) {
    $step = 1;
} else {
    $step = $_POST['step'];
}

// 确保step的值在1~3
$step = max($step, 1);
$step = min($step, 3);

// 保存数据阶段
if ($step > 1) {
    foreach ($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
}

include_once __DIR__ . "/step-$step.php";
