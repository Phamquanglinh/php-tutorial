<html lang="en">
<head>
    <title>Ex_02</title>
    <link rel="stylesheet" href="../../Library/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 col-12">
            <p class=" h2 text-capitalize bg-light p-3 ">registrations form</p>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="first-name" required>
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="last-name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-check form-check-inline">
                    <label>Gender</label>
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" aria-selected="true">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">State</label>
                    <select class="form-control" name="state" id="exampleFormControlSelect1" required>
                        <option value="johor">Johor</option>
                        <option value="massachusetts">Massachusetts</option>
                        <option value="washington">Washington</option>
                    </select>
                </div>
                <label>Hobbies</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbie" type="checkbox" value="badminton">
                    <label class="form-check-label" for="inlineCheckbox1">Badminton</label>
                    <input class="form-check-input" name="hobbie"type="checkbox" value="football">
                    <label class="form-check-label" for="inlineCheckbox1">Football</label>
                    <input class="form-check-input" name="hobbie"type="checkbox" value="bicycle">
                    <label class="form-check-label" for="inlineCheckbox1">Bicycle</label>
                </div>
                <button type="submit" class="btn btn-primary">Save Record</button>
                <button type="reset" class="btn ">Reset</button>
            </form>
            <?php
                if(isset($_POST['first-name'])){
                    echo 'Đăng ký thành công'.'<br>';
                    echo 'Tên :' .$_POST['first-name'].' '.$_POST['last-name'].'<br>';
                    echo 'Email :' .$_POST['email'].'<br>';
                    echo 'Giới tính :' .$_POST['gender'].'<br>';
                    echo 'Nơi sống:' .$_POST['state'].'<br>';
                    echo 'Sở thích:' .$_POST['hobbie'].'<br>';
                }

            ?>
        </div>
    </div>
</div>
</body>
</html>