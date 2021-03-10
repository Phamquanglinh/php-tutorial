<?php
    $arr=[];
    $arrLength = readline('Số phần tử: ');
    for($i=0 ; $i<$arrLength ;$i++){
        $arr[$i] = readline('A['.$i.']=');
    }
    echo 'Max:'.max($arr).'  ';
    echo 'Min:'.min($arr).'  ';
    echo 'Avg:'.array_sum($arr)/$arrLength;
