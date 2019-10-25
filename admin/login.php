<?php
//关于的登录分为两步
//1.打开登录界面
//2.验证账号和密码

//通过请求方式来决定，get是打开登录  post是验证账号密码

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    require '../view/admin/login.html';//php包含文件用include
} else {
    //接收前台，数据库数据
    $username = $_POST['username'];
    $password = crypt($_POST['password'], md5($_POST['password'])); //加密的密码

    //获取数据库的管理员
    $mysql = new mysqli("localhost", "root", "", "flower", "3306");

    if ($mysql->connect_errno) {
        echo "数据库连接失败，失败的原因是" . $mysql->connect_error;
        exit();
    }
    //设置查询字符集
    $mysql->query("set names utf8");

    //数据库连接成功之后，从数据库拿一些数据
    $res = "select * from manage where username='$username'";

    $row = $mysql->query($res)->fetch_all(MYSQLI_ASSOC);

    //判断前台数据与后台是否相等
    $count = count($row);
    if ($count) {
        for ($i = 0; $i < $count; $i++) {
            if ($row[$i]["password"] === $password) {
                echo json_encode([
                    'code' => 200,
                    'msg' => '登录成功'
                ]);
                exit();

            }
            echo json_encode([
                'code' => 404,
                'msg' => '用户名和密码不匹配'
            ]);
        }

    } else {
        echo json_encode([
            'code' => 404,
            'msg' => '登录失败'
        ]);
    }
}



