<?php
$methed = $_SERVER['REQUEST_METHOD'];
require '../lib/db.php';
if ($methed == 'GET') {
    $gid = $_GET['gid'];
//    var_dump($gid);

    //数据库商品的数据
    $sql = "select * from  goods where gid=$gid";
    $res = $mysql->query($sql)->fetch_assoc();

    //所属分类的数据
    $sql = 'select *from category ';
    $category = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);


    require '../view/admin/goodsUpdate.html';
} else {

    //接收数据
    $data = $_POST;

    //在删除之前，先保留gid的值
    $gid = $data['gid'];



    //调用函数
    require '../lib/common.php';

    //保存成功然后删除gid
    unset($data['gid']);

    //调用键值对函数
    $str = joinKeyValues($data);

    $sql = "update goods set $str where gid=$gid";
    $mysql->query($sql);

    if ($mysql->affected_rows > 0) { //受影响的行数
        echo json_encode([
            'code' => 200,
            'msg' => '修改成功'
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '修改失败'
        ]);
    }
}
