<?php
$arr = [1,2,3,4,5,6,7,8,9,10];
$ji = $ou =[];
foreach($arr as $key => $v){
    if($v % 2==1){
        $ji[]=$v;
    }else{
        $ou[] = $v;
    }
}
echo "<pre>";
//var_dump(array_merge($arr));
print_r(array_merge($arr));