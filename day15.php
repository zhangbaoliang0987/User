<?php
$str = "1,2,3,4,5,6,7";
function red($str){
    for($i=0;count($str);$i++){
        $data = "";
        for($j=$i;$j<count($str)-1;$j++){
            if($str[$i]>$str[$j+1]){
                $data = $str[$i];
                $str[$i] = $str[$j+1];
                $str[$j+1] = $data;
            }
        }
    }
    return $str;
}
echo "<pre>";
print_r(red($str));