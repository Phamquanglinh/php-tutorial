
<form action="#cal" method="post" >
    <input name="first-number" type="number" placeholder="Số thứ nhất" required>
    <input name="second-number" type="number" placeholder="Số thứ hai" required>
    <input type="submit" value="Tính">
</form>
<div id="cal">
    <?php
    if(isset($_POST['first-number']) && isset($_POST['second-number'])){
        $total = $_POST['first-number'] + $_POST['second-number'] ;
        if ($_POST['first-number'] == $_POST['second-number']){
            $total *= 3;
        }
        echo 'Số thứ nhất:' .$_POST['first-number'] .'<br>';
        echo 'Số thứ hai:' .$_POST['second-number'].'<br>';
        echo  'Tổng :' .$total;
    }
    ?>
</div>

