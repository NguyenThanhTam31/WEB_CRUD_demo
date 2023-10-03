<?php
if (isset($_POST['register-submit'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm-password'];
    $sdt = $_POST['sdt'];
    if ($pass === $confirm_pass) {
        require_once '../ketnoi.php';
        $SignUp_sql = "INSERT INTO Email_User (name, email, pass, sdt) VALUES('$user', '$email','$pass', '$sdt')";

        if (mysqli_query($conn, $SignUp_sql)) {
            session_start();
            $_SESSION['SignUp_success'] = "Đăng ký thành công";
            header("Location: form_login.php");
        }
    } else {
        session_start();
        $_SESSION['SignUp_error'] = "Mật khẩu bị sai.";
        header("Location: form_login.php");
    }
}
?>
