<html lang="en">
<head>
    <title>Ex_02</title>
    <link rel="stylesheet" href="../../Library/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="form">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Nhập số a</label>
                <input type="number" class="form-control" name="a" required>
            </div>
            <div class="form-group">
                <label>Nhập số b</label>
                <input type="number" class="form-control" name="b" required>
            </div>
            <button type="submit" class="btn btn-success" name="plus">a+b</button>
            <button type="submit" name="minus" class="btn btn-warning">a-b</button>
            <button type="submit" name="multiply" class="btn btn-primary">a*b</button>
            <button type="submit" name="divide" class="btn btn-danger">a/b</button>
        </form>
    </div>
    <?php
    if (isset($_POST['plus'])) {
        echo $_POST['a'].'+'.$_POST['b'].'=';
        echo $_POST['a'] + $_POST['b'];
    }
    if (isset($_POST['minus'])) {
        echo $_POST['a'].'-'.$_POST['b'].'=';

        echo $_POST['a'] - $_POST['b'];
    }
    if (isset($_POST['multiply'])) {
        echo $_POST['a'].'x'.$_POST['b'].'=';

        echo $_POST['a'] * $_POST['b'];
    }
    if (isset($_POST['divide'])) {
        if($_POST['b']!=0){
            echo $_POST['a'].'/'.$_POST['b'].'=';

            echo $_POST['a'] / $_POST['b'];
        }else{
            echo 'Not calculate';
        }

    }


    ?>
</div>
</body>
</html>