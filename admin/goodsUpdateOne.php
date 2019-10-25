<?php
//接收前台的数据
$arr = $_POST;
$id = $arr['id'];
$value = $arr['value'];
$type = $arr['type'];

require '../lib/db.php';


$sql = "update goods set  $type='$value'where gid=$id";

$mysql->query($sql);


if ($mysql->affected_rows>0) { //受影响的行数
    echo json_encode([
        'code' => 200,
        'msg' => '修改成功'
    ]);
}else{
    echo json_encode([
        'code' => 404,
        'msg' => '修改失败'
    ]);
}