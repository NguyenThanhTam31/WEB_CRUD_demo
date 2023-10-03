<?php
//Nhận dữ liệu từ form
$email = $_POST['email'];
$pass = $_POST['pass'];
// Kết nối csdl

require_once '../ketnoi.php';

// lenh sql them du lieu

$update_sql = "UPDATE Email_User SET pass='$pass' WHERE email='$email'";



//thuc thi cau lenh them

if (mysqli_query($conn, $update_sql)){
    echo "<h1>Thêm thành công</h1>";
    header("Location: form_login.php");
}
// echo $add_sql;
// exit;