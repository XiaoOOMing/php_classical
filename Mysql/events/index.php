<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/17
 * Time: 13:33
 */
$host = '127.0.0.1';
$user = 'root';
$password = 'root';
$port = 3306;
$db_name = 'test';

// 连接数据库(引擎：InnoDB)
$db = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $user, $password, [PDO::ATTR_PERSISTENT => true]);

// 要么全部运行 要么全部停止
try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->beginTransaction();

    $db->exec('insert into user (name,age,email) values ("XiaoOOMing",18,"364216899@qq.com")');
    $db->exec('insert into user (name,age,email) values ("XiaoOOMing",18,"364216899@qq.com")');

    $db->commit();


} catch (Exception $e) {
    $db->rollBack();
    echo "Failed: " . $e->getMessage();
}
