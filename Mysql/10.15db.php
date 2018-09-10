<?php
require_once 'DB.php';

// 连接数据库
$db = DB::get();

// 查询
$datas = $db->query('select id,realname from dp_ad_editor', PDO::FETCH_ASSOC)->fetchAll();
foreach ($datas as $row) {
    var_dump(json_encode($row));
}
