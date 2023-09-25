<?php
// lấy dữ liệu id cần xoá

$user_id = $_GET['sid'];

//kết nối
require_once 'ketnoi.php';

//câu lệnh sql

$delete_sql= "DELETE FROM USER WHERE id=$user_id";

mysqli_query($conn, $delete_sql);
// trở về trang liệt kê
header("Location: index.php");

