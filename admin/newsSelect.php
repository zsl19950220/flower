<?php
//先获取数据库的数据
require '../lib/db.php';

$sql='select * from news where nid';
$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/newsSelect.html';