
<form action="#cal" method="post" >
    <input name="number" type="number" placeholder="Số thứ nhất" required>
    <input type="submit" value="Tính">
</form>
<div id="cal">
    <?php
    if(isset($_POST['number'])){
        if($_POST['number'] == 0){
            echo 'Số 0';
        }else{
            if($_POST['number'] % 2 == 0){
                echo 'Số chẵn';
            }else{
                echo  'Số lẻ';
            }
        }
    }
    ?>
</div>

