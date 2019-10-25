<?php
//接收前台的图片
$file = $_FILES['file'];

//name=>logo.png 上传文件名字
//type=>image/png 类型
//tmp_name=>''临时文件
//error=>状态码
//size=>123

//tmp_name =>upload/20190927/xx.png

//在移动照片之前，判断文件夹是否存在，没有的话创建一个
if(!is_dir('../uploads')){
    mkdir('../uploads');

}
//判断是否有日期的文件夹，没有的话创建一个
$data=date('Ymd');
if(!is_dir('../uploads/'.$data)){
    mkdir('../uploads/'.$data);
}


//给图片随机取一个名字
$imgname = time() . mt_rand(0, 9999);


$set = substr($file['type'], '6');   //$set = array_pop()

//移动照片
$imgname .= '.' . $set;
$movepath='/flower/uploads/'.$data.'/'.$imgname;
$webpath='../uploads/'.$data.'/'.$imgname;
$result=move_uploaded_file($file['tmp_name'],$webpath);
if ($result) {
    echo json_encode([
        'code' => 200,
        'msg' => '图片上传成功',
        'src' => $webpath
    ]);
} else {
    echo json_encode([
        'code' => 404,
        'msg' => '图片上传失败'
    ]);
}