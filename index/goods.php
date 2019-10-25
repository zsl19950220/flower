<?php
//采用一对多的方式

//先获取数据库的数据
require '../lib/db.php';

//获取公共的部分
require '../index/header.php';

$gid = $_GET['gid'];

$sql = "select * from goods where gid=$gid";


$goods = $mysql->query($sql)->fetch_assoc();

$prevsql="select gid,gname from goods where gid<$gid order by gid desc limit 0,1";
$prevqs=$mysql->query($prevsql)->fetch_assoc();
$prevstr='';
if($prevqs){
    $prevstr="<a href='goods.php?gid={$prevqs['gid']}'>{$prevqs['gname']}</a>";
}else{
    $prevstr="<a>没有了</a>";
}


$prevsql="select gid,gname from goods where gid>$gid order by gid desc limit 0,1";
$prevqsl=$mysql->query($prevsql)->fetch_assoc();
$prevstrl='';
if($prevqs){
    $prevstrl="<a href='goods.php?gid={$prevqsl['gid']}'>{$prevqsl['gname']}</a>";
}else{
    $prevstrl="<a>没有了</a>";
}

require '../view/index/product1.html';

