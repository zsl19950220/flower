<?php
//采用一对多的方式

//先获取数据库的数据
require '../lib/db.php';

//获取公共的部分
require '../index/header.php';

$id = $_GET['id'];

$sql = "select * from nav where id=$id";

$nav = $mysql->query($sql)->fetch_assoc();

$tpl = $nav['ntpl'];



//require '../view/index/chart.html'; //首页
//require '../view/index/fwxm.html';  //服务项目
//require '../view/index/about.html';  //关于我们
//require '../view/index/cpzx.html';    //产品中心
//require '../view/index/xwzx.html';   //新闻中心
//require '../view/index/zxyy.html';  //在线预约

//判断文件是否存在，如果存在，执行，没有的话，返回404

$is = file_exists('../view/index/' . $tpl . '.html');

if ($is) {
    require '../view/index/' . $tpl . '.html';
} else {
    require '../view/index/404.html';

}
require '../index/footer.php';



