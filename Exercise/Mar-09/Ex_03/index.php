<?php
$total = 0;
$number = 0;
while ($number <= 100) {
    $total += $number;
    if ($number >= 20 && $number <= 50) {
        if ($number % 3 == 0) {
            echo $number . '<br>';
        }
    }
    $number++;
}
echo 'Total: ' . $total;
?>