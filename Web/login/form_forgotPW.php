<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<div class="container">
        <h1>Forgot Password</h1>
        <form action="./process_forgot_pw.php" method="post">
            <div class="form-group">
                <label for="masv">Email</label>
                <input type="text" id="email" class="form-control" name="email">
            </div><div class="form-group">
                <label for="diachi">Mật khẩu</label>
                <input type="text" id="pass" class="form-control" name="pass">
            </div>
            <button class="btn btn-success">Thay đổi mật khẩu</button>
        </form>
    </div>
</body>

</html>