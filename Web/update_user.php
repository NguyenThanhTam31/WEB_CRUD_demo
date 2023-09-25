<?php
//Nhận dữ liệu từ form
$masv = $_POST['masv'];
$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];   
$id = $_POST['sid'];
// Kết nối csdl

require_once 'ketnoi.php';

// lenh sql them du lieu

$update_sql = "UPDATE USER SET masv='$masv', hoten='$hoten', diachi='$diachi' WHERE id=$id";



//thuc thi cau lenh them

if (mysqli_query($conn, $update_sql)){
    echo "<h1>Thêm thành công</h1>";
    header("Location: index.php");
}
// echo $add_sql;
// exit;