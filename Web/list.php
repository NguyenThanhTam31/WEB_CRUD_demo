<?php
// kết nối
require_once 'ketnoi.php';
// cau lenh
$list_sql = "SELECT * FROM USER ORDER BY diachi, hoten";

//thực thi câu lệnh

$result = mysqli_query($conn, $list_sql);

// Duyệt qua result và in ra

while ($r = mysqli_fetch_assoc($result)){
    echo $r['masv'] . "-" .$r['hoten'] . "-". $r['diachi'];
}
?>