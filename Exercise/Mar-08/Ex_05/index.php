
<form action="#cal" method="post" >
    <input name="number" type="number" min="0" placeholder="Số KWH" required>
    <input type="submit" value="Tính">
</form>
<div id="cal">
    <?php
    if(isset($_POST['number'])){
        switch (true){
            case ($_POST['number'] <= 100 ):
                $price = 450 ;
                break;
            case ($_POST['number'] <= 200 ):
                $price = 600 ;
                break;
            case ($_POST['number'] <= 300 ):
                $price = 750 ;
                break;
            case ($_POST['number'] <= 500 ):
                $price = 900 ;
                break;
            case ($_POST['number'] <= 1000 ):
                $price = 1000 ;
                break;
            default : $price = 1200 ;

        }
        echo 'Chưa tính VAT :' .$price * $_POST['number'].' đ <br>';
        echo 'Đã tính VAT :' .$price * $_POST['number']*1.1.' đ <br>';
    }
    ?>
</div>

<?php
