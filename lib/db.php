<?php
//连接数据库
$mysql = new mysqli("localhost", "root", "", "flower", "3306");

if ($mysql->connect_errno) {
    echo "数据库连接失败，失败的原因是" . $mysql->connect_error;
    exit();
}

//设置查询字符集
$mysql->query("set names utf8");