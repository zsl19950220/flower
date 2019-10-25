<?php
//展示页面
//渲染数据


//渲染数据

//先把获取数据库的函数拿过来
require '../lib/db.php';

$sql = "select * from nav order by nsort";
$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/navSelect.html';


