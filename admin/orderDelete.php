<?php
//接收数据
$arr=$_POST;
$id=$arr['id'];

require '../lib/db.php';

$sql="delete from tianjia where oid=$id";
$mysql->query($sql);
if($mysql->affected_rows>0){
    echo json_encode([
       'code'=>200,
       'msg'=>'删除成功'
    ]);
}else{
    echo json_encode([
       'code'=>404,
       'msg'=>'删除失败'
    ]);
}