<?php
//先把获取数据库的函数拿过来
require '../lib/db.php';

$sql = "select * from category order by id";

$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/creatSelect.html';