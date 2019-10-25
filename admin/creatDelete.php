<?php

//先接收前台发送过来的数据
$arr =$_POST;
$id =$arr['id'];

//使用包含数据库的函数，使得连接数据库
require'../lib/db.php';

$sql="delete  from category where id=$id";

$mysql->query($sql);

//判断数据库行数是否发生变动

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