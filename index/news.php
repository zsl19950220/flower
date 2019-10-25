<?php
//采用一对多的方式

//先获取数据库的数据
require '../lib/db.php';

//获取公共的部分
require '../index/header.php';

$nid = $_GET['id'];

$sql = "select * from news where nid=$nid";


$qs = $mysql->query($sql)->fetch_assoc();

$prevsql="select nid,cname from news where nid<$nid order by nid desc limit 0,1";
$prevqs=$mysql->query($prevsql)->fetch_assoc();
$prevstr='';
if($prevqs){
    $prevstr="<a href='news.php?id={$prevqs['nid']}'>{$prevqs['cname']}</a>";
}else{
    $prevstr="<a>没有了</a>";
}

$prevsql="select nid,cname from news where nid>$nid order by nid desc limit 0,1";
$prevqsl=$mysql->query($prevsql)->fetch_assoc();
$prevstrl='';
if($prevqsl){
    $prevstrl="<a href='news.php?id={$prevqsl['nid']}'>{$prevqsl['cname']}</a>";
}else{
    $prevstrl="<a>没有了</a>";
}


require '../view/index/news1.html';

require '../index/footer.php';
