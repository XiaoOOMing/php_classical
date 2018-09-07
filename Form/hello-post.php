<?php
// 检测是否传递了 $_POST['first_name']
if (!filter_has_var(INPUT_POST, 'first_name')) {
    echo 'You must enter your first name';
} else {
    echo 'Hello ' . $_POST['first_name'];
}
