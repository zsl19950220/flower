<?php
//接收前台的数据
$arr=$_POST;
$id=$arr['id'];
$type=$arr['type'];
$value=$arr['value'];

//连接数据库
require '../lib/db.php';

$sql = "update category set  $type='$value'where id=$id";
$mysql->query($sql);

//判断行数是否发生变化
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"修改成功"
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>'修改失败'
    ]);
}