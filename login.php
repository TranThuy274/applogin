<?php
session_start();

if (isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] == true)){

    header("Location: index.php");
    exit();
}

/**
 * Nạp file kết nối dữ liệu
 */

include_once "config.php";
/**
 * Biến lưu trữ lỗi trog quá trình đăng nhập
 */
$errors = array();

/**
 * Xử lý đăng nhập
 *
 */

if(isset($_POST) && !empty($_POST)){
    if (!isset($_POST["username"])|| empty($_POST["username"])){
        $errors[] = "Chưa nhập username";
    }

    if (!isset($_POST["password"]) || empty($_POST["password"])){
        $errors[] = "Chưa nhập password";
    }

    /**
     * Nếu mảng errors bị rỗng tức là k có lỗi đăng nhập
     */

    if (is_array($errors) && empty($errors)){
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-md-12">
            <h1>Đăng nhập</h1>
            <form name="login" action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" autocomplete="off">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <p> <a href="register.php">Đăng kí</a></p>
                </div>
                <button type="submit" class="btn btn-primary">Đăng kí</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>