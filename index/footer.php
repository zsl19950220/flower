<?php
//获取nav数据库的数据
require '../lib/db.php';

$sql="select * from nav order by nsort";

$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

require '../view/index/footer.html';