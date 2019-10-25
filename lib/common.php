<?php
//连接数组的属性
function joinKey($arr)
{
    $str = '';
    //遍历接收的数据使得加上一个逗号
    foreach ($arr as $key => $value) {
        $str .= $key . ',';
    }
    //因为不需要最后后逗号，需要把最后一个截取了
    $str = substr($str, 0, -1);
    return $str;
}

//连接数组的值
function joinValues($arr)
{
    $str = '';
    foreach ($arr as $key => $value) {
        $str .= "'$value',";
    }
    $str = substr($str, 0, -1);
    return $str;

}

//键值对的函数  实现拼接一个键值对
//$arr关联数组

function joinKeyValues ($arr){
    $str='';
    foreach($arr as $key => $value){
        $str .="$key='$value',";
    }
    $str=substr($str,"0","-1");
    return $str;
}