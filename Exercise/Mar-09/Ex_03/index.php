<?php
    $number = 0;
    while ($number <= 1000){
        echo $number.'<br>';
        $number ++;
    }
    echo 'Số chia hết cho 3 khoảng 20-50 <br>';
    $number = 20;
    while ($number <=50){
        if($number % 3 == 0){
            echo $number.'<br>';
        }
        $number ++;
    }