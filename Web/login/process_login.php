<?php
// if (isset($_POST['login-submit'])) {
//     $user = $_POST['username'];
//     $pass = $_POST['password'];
//     require_once '../ketnoi.php';
//     $login_sql = "SELECT * FROM Email_User WHERE email='$user' OR sdt = '$user' and pass = '$pass'";
//     // $result = mysqli_query($conn, $login_sql);
//     // $row = mysqli_fetch_assoc($result);
//     // header("Location: ../index.php");

//     $stmt = $conn->prepare($login_sql);
//     $stmt->bind_param("ss", $user, $pass);
//     $stmt->execute();
//     $result = $stmt->get_result();
    
//     if ($result->num_rows > 0) {
//         // Đăng nhập thành công, đặt các phiên làm việc
//         session_start();
//         $_SESSION['username'] = $user;
//         $_SESSION['password'] = $pass;
//         header("Location: ../index.php");
//         exit();
//     } else {
//         // Đăng nhập thất bại, chuyển hướng về trang đăng nhập
//         header("Location: login/form_login.php");
//         exit();
//     }
// }

if (isset($_POST['login-submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    require_once '../ketnoi.php';

    // Sử dụng Prepared Statements để tránh các lỗ hổng bảo mật
    $login_sql = "SELECT * FROM Email_User WHERE email=? OR sdt=? AND pass=?";
    $stmt = $conn->prepare($login_sql);
    
    // Gán giá trị cho các tham số của câu truy vấn
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
        header("Location: login/form_login.php");
        exit();
    }
}

