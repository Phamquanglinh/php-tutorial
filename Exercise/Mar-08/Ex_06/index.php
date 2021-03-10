
<form action="#cal" method="post" >
    <input name="number" type="number" placeholder="Nhập số" required>
    <input type="submit" value="Tính">
</form>
<div id="cal">
    <?php
    if(isset($_POST['number'])){
        switch ($_POST['number']){
            case 0:
                echo 'Thứ 2';
                break;
            case 1:
                echo 'Thứ 3';
                break;
            case 2:
                echo 'Thứ 4';
                break;
            case 3:
                echo 'Thứ 5';
                break;
            case 4:
                echo 'Thứ 6';
                break;
            case 5:
                echo 'Thứ 7';
                break;
            case 6:
                echo 'Chủ Nhật';
                break;
            default : echo 'Không hợp lệ';
        }
    }
    ?>
</div>
