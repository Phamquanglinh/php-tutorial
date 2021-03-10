
<form action="#cal" method="post" >
    <input name="first-number" type="number" placeholder="Số thứ nhất" required>
    <input name="second-number" type="number" placeholder="Số thứ hai" required>
    <input type="submit" value="Tính">
</form>
<div id="cal">
    <?php
    if(isset($_POST['first-number']) && isset($_POST['second-number'])){
        echo 'Tổng :'. ($_POST['first-number'] + $_POST['second-number']) .'<br>';
        echo 'Hiệu :'. ($_POST['first-number'] - $_POST['second-number']) .'<br>';
        echo 'Tích :'. $_POST['first-number'] * $_POST['second-number'] .'<br>';
        echo 'Thương :'. $_POST['first-number'] / $_POST['second-number'] .'<br>';
        echo 'Chia dư :'. $_POST['first-number'] % $_POST['second-number'] .'<br>';
    }
    ?>
</div>

