<?php
//Lấy id của edit
$id = $_GET['sid'];

//Kết nối
require_once 'ketnoi.php';

//câu lệnh để lấy thông tin về user có id=$id

$edit_sql = "SELECT * FROM USER WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- //hiển thị thông tin lên form -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_User</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Form Edit User</h1>
        <form action="update_user.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="hoten">Họ Tên</label>
                <!-- readonly là không cho sửav -->
                <input type="text" id="hoten" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>"readonly> 
            </div>
            <div class="form-group">
                <label for="masv">Mã Sinh Viên</label>
                <input type="text" id="masv" class="form-control" name="masv" value="<?php echo $row['masv'] ?>">
            </div><div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" class="form-control" name="diachi" value="<?php echo $row['diachi'] ?>">
            </div>
            <button class="btn btn-success">Sửa</button>
        </form>
    </div>
</body>

</html>

