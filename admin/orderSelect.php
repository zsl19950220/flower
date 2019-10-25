<?php
//获取数据
require '../lib/db.php';

$sql="select * from tianjia where oid";
$res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/admin/orderSelect.html';