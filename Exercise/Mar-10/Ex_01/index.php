<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container p-5">
    <div class="text-center bg-success p-3 w-100 mt-3">Sign In</div>
    <form action="index.php" method="post">
        <input type="text" class="form-control mt-3" name="username" placeholder="Username" required>
        <input type="password" class="form-control mt-3" name="password" placeholder="Password" required>
        <input class="btn btn-success w-100 mt-3" type="submit" value="Login">
    </form>
</div>
<div class="text-center">
    <?php
    $username = 'admin';
    $password = 'admin';
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            echo    '<script>alert("'.$username.'")</script>';
        } else {
            echo 'Thông tin đăng nhập không hợp lệ';
        }
    }
    ?>
</div>
