<?php
    $productCode = 'EV2009';
    $productName = 'Tấm hợp kim nhôm ngoài trời EV2009 ';
    $productQuantity = 500 ;
    $productPrice = 160000;
    $vat = 0.05;
    //Print
?>
    <p>Tên sản phẩm :<?= $productName ?></p>
    <p>Mã sản phẩm :<?= $productCode ?></p>
    <p>Số lượng :<?= $productQuantity ?></p>
    <p>Đơn giá: <?= $productPrice ?> đ / 1 sản phẩm</p>
    <p>VAT :<?= $vat ?></p>
    <p>Tạm tính (chưa trừ VAT) :<?= $total = $productPrice * $productQuantity ?> đ</p>
    <p>Đã trừ VAT  :<?= $total - $total * $vat ?> đ</p>

