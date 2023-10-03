<?php
if (isset($_POST['login-submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    require_once '../ketnoi.php';
    $login_sql = "SELECT * FROM Email_User WHERE (email=? OR sdt=?) AND pass=?";

    $stmt = $conn->prepare($login_sql);
    $stmt->bind_param("sss", $user, $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Đăng nhập thành công, đặt các phiên làm việc
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header("Location: ../index.php");
        exit();
    } else {
        // Đăng nhập thất bại, chuyển hướng về trang đăng nhập
        session_start();
        $_SESSION['login_error'] = "Sai tài khoản hoặc mật khẩu.";
        header("Location: form_login.php");
    }
}
