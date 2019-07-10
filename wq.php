<?php
$arr = [12,14,16,15,14,13];
function red($arr)
{
    if (count($arr)<=1) {
        return $arr;
    }
    $base = $arr[0];
    $min = [];
    $max = [];
    for ($i = 1; $i<count($arr) ; $i++) {
        if ($arr[$i] >= $base) {
            $min = $arr[$i];
        } else {
            $max = $arr[$i];
        }
    }
    $left = red($min);
    $right = red($max);
    return array_merge($left,[$base],$right);
}
echo "<pre>";
print_r(red($arr));
?>