<?php 
$arr = array('12','13','15','19','20');
function red($arr){
for($i=0;$i<count($arr);$i++){
$data = "";
for($j=$i;$j<count($arr)-1;$j+){
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
var_dump(red($arr));
?>