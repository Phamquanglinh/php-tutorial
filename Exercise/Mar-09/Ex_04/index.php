<?php
    $total = $sqTotal =0;
    $number = 0;
    while ($number < 50 ){
        $total += $number;
        $sqTotal += ($number*$number);
        $number++;
    }
    echo 'Tổng: '. $total .'<br>';
    echo 'Tổng bình phương: '. $sqTotal .'<br>';