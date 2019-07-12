<?php
rm(100,3000);
function rm($r,$m){
    $calfn = range($r,$m);
    echo substr_count(join($calfn,$r),'1')-1;
}