<?php
if (isset($_POST['login-submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","QLYUSER");
    $login_sql = "SELECT * FROM Email_User WHERE email='$user' OR sdt = '$user' and pass = '$pass'";
    $result = mysqli_query($conn, $login_sql);
    $row = mysqli_fetch_assoc($result);
    header("Location: ../index.php");
}
