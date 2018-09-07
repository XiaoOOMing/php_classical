<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'root';
$port = 3306;
$db_name = 'deeprocess';

// 连接数据库
$db = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $user, $password);

// 查询
// 额外参数：默认 PDO::FETCH_BOTH；可以作为query的第二个参数，也可以作为fetch的参数
$st = $db->query('select * from dp_ad_editor');
foreach ($st->fetchAll() as $row) {
    var_dump($row['id']);
}

// 数字作为键值
$st = $db->query('select * from dp_ad_editor', PDO::FETCH_NUM);
var_dump(json_encode($st->fetch()));

// 列名作为键值
$st = $db->query('select * from dp_ad_editor', PDO::FETCH_ASSOC);
var_dump(json_encode($st->fetch()));

// 返回一个对象
$st = $db->query('select * from dp_ad_editor');
$obj = $st->fetch(PDO::FETCH_OBJ);
var_dump($obj->id, $obj->username, $obj->realname);


// 查询一个值 (bindColumn将查询到的值保存到变量中)
$row = $db->query('select * from dp_ad_editor', PDO::FETCH_BOUND);
$row->bindColumn('id', $id);
$row->bindColumn('realname', $name);
while ($row->fetch()) {
    var_dump("id $id, name $name");
}

// 查询一列 (感觉不好用，第二个参数要使用索引)
$st = $db->query('select * from dp_ad_editor');
foreach ($st->fetchAll(PDO::FETCH_COLUMN, 2) as $row) {
    var_dump($row);
}

// 插入
//$db->exec('insert into dp_ad_editor (username,realname,password,avatar,ctime,status) values ("shuleiming", "舒磊明", "123456", "", "", "")');

// 修改
//$db->exec('update dp_ad_editor set ctime = 123 where id=182');

// 删除
//$db->exec('delete from dp_ad_editor where id=182');

// 准备查询（对多次执行的查询友好）
/*$st = $db->prepare('insert into dp_ad_editor (username,realname,password,avatar,ctime,status) values (?,?,?,?,?,?)');
$st->execute(['XiaoOOMing1', '小明1', md5(123456), 'avatar', time(), 1]);
$st->execute(['XiaoOOMing2', '小明2', md5(123456789), 'avatar', time(), 1]);
$st->execute(['XiaoOOMing3', '小明3', md5(123456111), 'avatar', time(), 1]);*/

// 占位符
/*$st = $db->prepare('delete from dp_ad_editor where id=?');
$st->execute([190]);
$st->execute([191]);
$st->execute([192]);*/

// 返回错误信息
/*$st = $db->query('select * from dp_ad_editors');
if (!$st) {
    var_dump($db->errorInfo());
}*/
