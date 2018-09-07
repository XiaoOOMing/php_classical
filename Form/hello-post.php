<?php
// 检测是否传递了 $_POST['first_name']
if (!filter_has_var(INPUT_POST, 'first_name') || $_POST['first_name'] == '') {
    echo 'You must enter your first name!';
} else {
    // 检测是否传递了 $_POST['age']
    if (!filter_has_var(INPUT_POST, 'age') || $_POST['age'] == '') {
        echo 'You must enter your age!';
    } else {
        // 检测 $_POST['age']必须为数字
        if (!filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT)) {
            echo 'Submitted age is invalid!';
        } else {
            echo 'Hello ' . $_POST['first_name'] . ', your age is ' . $_POST['age'] . '.';
        }
    }
}
