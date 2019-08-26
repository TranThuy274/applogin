<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/17/2019
 * Time: 1:02 PM
 */
define("DB_SERVER", "localhost");
define("DB_SERVER_USERNAME", "root");
define("DB_SERVER_PASSWORD", "");
define("DB_SERVER_NAME", "demoapplogin");

$connection = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_SERVER_NAME);

/**
 * Kiểm tra xem kết nối cơ sở dữ liệu có thành công không
 * Nếu không thì sẽ ngắt kết nối bằng câu lệnh die()
 */

if ($connection == false){
    die("Không thể kết nối với cơ sở dữ liệu" . mysqli_connect_error());
}