<?php

$arr = $_POST;
$id = $arr['id'];
//先把获取数据库的函数拿过来
require '../lib/db.php';

$sql = "delete  from nav where id=$id";

$mysql->query($sql);

if ($mysql->affected_rows>0) { //受影响的行数
    echo json_encode([
        'code' => 200,
        'msg' => '删除成功'
    ]);
}else{
    echo json_encode([
        'code' => 404,
        'msg' => '删除失败'
    ]);
}