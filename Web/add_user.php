<?php
//Nhận dữ liệu từ form
$masv = $_POST['masv'];
$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];   

// Kết nối csdl

require_once 'ketnoi.php';

$masv_hash = password_hash($masv, algo: PASSWORD_DEFAULT);

// lenh sql them du lieu, truy vấn

$add_sql = "INSERT INTO USER (masv, hoten, diachi) VALUES('$masv_hash', '$hoten','$diachi')";



//thuc thi cau lenh them

if (mysqli_query($conn, $add_sql)){
    echo "<h1>Thêm thành công</h1>";
    header("Location: index.php");
}
// echo $add_sql;
// exit;
//b3: Thực hiện truy vấn
// $result = mysqli_query($conn, $add_sql);
//b4: Xử lý kết quả
// $users = mysqli_fetch_all($result)
//lấy ra toàn bộ dữ liệu (fetch_all)
?>
