<?php
$str = "student. a am I";
function get($str){
    $arr = explode("",$str);
    ksort($str);
    $arr = implode("",$arr);
    return $arr;
}
print_r(get($str));