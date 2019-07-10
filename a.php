<?php 
$arr = array('12','13','1','45','89','78','65','16');
function red($arr){
for($i=1;$i<count();$i++){
	$data = "";
for($j=$i;$j<count()-1;$j++){
 if($arr[$i]>$arr[$j+1]){
$data = $arr;
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