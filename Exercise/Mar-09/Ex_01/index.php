<form action="index.php" method="post">
    <input name="n" type="number" min="0" placeholder="n" required>
    <input type="submit">
</form>
<?php
if(isset($_POST['n'])){
    $n =$_POST['n'];
    for($i=0;$i<=$n;$i++){
        echo $i .'<br>';
    }
}
