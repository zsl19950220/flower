<?php
$method =$_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    require '../view/admin/navinsert.html';
}else{
    //接收前台数据
    require'../lib/common.php';
    $data = $_POST;



//连接数据库
    $mysql = new mysqli("localhost", "root", "", "flower", "3306");

    if ($mysql->connect_errno) {
        echo "数据库连接失败，失败的原因是" . $mysql->connect_error;
        exit();
    }

//设置查询字符集
    $mysql->query("set names utf8");

    $key=joinKey($data);
    $value=joinValues($data);

    $sql = "insert into nav ($key) value($value)";

    $mysql->query($sql);

    if ($mysql->affected_rows > 0) { //受影响的行数
        echo json_encode([
            'code' => 200,
            'msg' => '添加成功'
        ]);
    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '添加失败'.$mysql->connect_error

        ]);
    }
}


