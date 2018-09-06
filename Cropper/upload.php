<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/6
 * Time: 17:02
 */

var_dump($_FILES);
var_dump($_REQUEST);

// 上传文件
$target = __DIR__ . '/upload.jpg';
move_uploaded_file($_FILES['croppedImage']['tmp_name'], $target);
