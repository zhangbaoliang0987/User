<?php
$arr = array('12','13','14','15',"16","87");
function day($arr){
    for($i=0;$i<count($arr);$i++){
        $data = "";
        for($j=$i;$j<count($arr)-1;$j++){
            if($arr[$i]>$arr[$j+1]){
                $data = $arr[$i];
                $arr[$i] = $arr[$j+1];
                $arr[$j+1] = $data;
            }
        }
    }
    return $arr;
}
echo "<pre>";
print_r(day($arr));