<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include_once 'hello-get.php';
} else {
    include_once 'hello-post.php';
}
