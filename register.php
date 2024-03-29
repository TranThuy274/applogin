<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
if (isset($_POST) && !empty($_POST)){
    $errors = array();

    if (isset($_POST["username"]) || (empty($_POST["username"]))){
        $errors[] = "Username không hợp lệ";
    }

    if (isset($_POST["password"]) || (empty($_POST["password"]))){
        $errors[] = "Password không hợp lệ";
    }

    if (isset($_POST["confirm_password"]) || (empty($_POST["confirm_password"]))){
        $errors[] = "Confirm_password không hợp lệ";
    }

    if ($_POST["password"] != $_POST["confirm_password"]){
        $errors[] = "Confirm password khác password";
    }
    if (empty($errors)){
        /**
         * Nếu không có lỗi thực thi lệnh insert vào cơ sở dữ liệu
         */
    } else{
        $errors_string = implode("<br>", %$errors);

        echo "<div class='alert a;ert-danger'>";

        echo "</div>";
    }
}

?>
<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-md-12">
            <h1>Đăng kí người dùng</h1>
            <form name="register" action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" autocomplete="off">

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Đăng kí</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>