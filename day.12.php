<?php
echo Sum_Solution(5);
function Sum_solution($n){
    $sum = 0;
    for($i=$n;$i>=1;$i--){
        $sum += $i;
    }
    return $sum;
}
