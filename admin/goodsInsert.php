<?php
$method = $_SERVER['REQUEST_METHOD'];
require '../lib/db.php';

$sql = "select * from category order by id";

$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
if ($method === 'GET') {
    require '../view/admin/goodsInsert.html';
} else {
    //接收前台数据
    require '../lib/common.php';
    $data = $_POST;

    $data['creat_time'] = date('Y-m-d h:i:s'); //设置时间戳


    $key = joinKey($data);
    $value = joinValues($data);

    $sql = "insert into goods ($key) values($value)";
//    var_dump($sql);


    $mysql->query($sql);

    if ($mysql->affected_rows > 0) { //受影响的行数
        echo json_encode([
            'code' => 200,
            'msg' => '添加成功'
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '添加失败'

        ]);
    }
}