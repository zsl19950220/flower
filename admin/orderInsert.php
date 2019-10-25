<?php

require '../lib/common.php';
require '../lib/db.php';

//接收前台的数据
$data = $_POST;

//调用函数
$key = joinKey($data);
$value = joinValues($data);
$sql = "insert into tianjia ($key) values($value)";
$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

if ($mysql->affected_rows > 0) { //受影响的行数
    echo json_encode([
        'code' => 200,
        'msg' => '添加成功'
    ]);
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '添加失败' . $mysql->connect_error

    ]);

}