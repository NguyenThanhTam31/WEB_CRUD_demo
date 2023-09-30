<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    // Người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login/form_login.php");
    exit();
}
?> 

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  
  <div class="container-fluid bg-gray">
    <div class="row">
      <div class="col-2 phai">
        <div class="col-12">
          <img src="./image/logo.png" class="img-thumbnail" sizes="" alt="...">
        </div>
        <div class=side-bar>
          <div class="menu">
            <div class="item">
              <a class="sub-btn" href="" #><i class="bi bi-person-fill"></i>User<i class="bi bi-caret-right-fill dropdown"></i></a>
              <div class="sub-menu">
                <a href="#" class="sub-item">Sub Item 01</a>
                <a href="#" class="sub-item">Sub Item 02</a>
                <a href="#" class="sub-item">Sub Item 03</a>
              </div>
            </div>
            <div class="item">
              <a class="sub-btn" href="" #><i class="bi bi-box-seam"></i>CMS<i class="bi bi-caret-right-fill dropdown"></i></a>
              <div class="sub-menu">
                <a href="#" class="sub-item">Sub Item 01</a>
                <a href="#" class="sub-item">Sub Item 02</a>
                <a href="#" class="sub-item">Sub Item 03</a>
              </div>
            </div>
            <div class="item"><a href="" #><i class="bi bi-gear"></i>Config<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-grid"></i>Dashboard<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-book"></i>Course<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-people"></i>Instructor<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-info-circle"></i>Apps<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-pie-chart"></i>Charts<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-star"></i>Bootrap<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-heart"></i>Plugin<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-gear-wide"></i>Widget<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-file-earmark-check"></i>Forms<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-file-earmark-spreadsheet"></i>Table<i class="bi bi-caret-right-fill dropdown"></i></a></div>
            <div class="item"><a href="" #><i class="bi bi-file-earmark-break"></i>Pages<i class="bi bi-caret-right-fill dropdown"></i></a></div>

          </div>
        </div>
      </div>

      <div class="col-9 bg-light">
        <div class="d-flex;">
          <i class="bi bi-list fa-3x" style="font-size: 40px;"></i>
          <span class="m-0" style="font-weight: bold; font-size: 42px;">Dashboard</span>
        </div>

        <div class="row mt-5">
          <div class="col-6">
            <img src="./image/girl.png" class="img-fluid">
          </div>
          <div class="col-6">
            <img src="./image/Bieu_Do.png" class="img-fluid">
          </div>
        </div>
        <!-- Table -->
        <div>
          <!-- <a href="add_user.html" class="btn btn-primary">
            <i class="bi bi-person-fill-add"></i>
            Add User
          </a> -->
          <a href="add_user.html"><button type="button" class="btn btn-primary"><i class="bi bi-person-add"></i> Add user</button></a>
        </div>
        <div class="mt-2">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Mã Sinh Viên</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // kết nối
              require_once 'ketnoi.php';
              // cau lenh
              $list_sql = "SELECT * FROM USER ORDER BY diachi, hoten";

              //thực thi câu lệnh

              $result = mysqli_query($conn, $list_sql);

              // Duyệt qua result và in ra
              $id = 1;
              while ($r = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <?php echo "<td>" . $id . "</td>"; ?>
                  <td><?php echo $r['masv']; ?></td>
                  <td><?php echo $r['hoten']; ?></td>
                  <td><?php echo $r['diachi']; ?></td>
                  <?php $id++; ?>
                  <td>
                    <a href="Infor.php?sid=<?php echo $r['id']; ?>" style="color:orangered"><i class="bi bi-eye-fill ms-2 function"></i></a>
                    <a href="edit.php?sid=<?php echo $r['id']; ?>" style="color:orangered"><i class="bi bi-pencil-square function"></i></a>
                    <a href="delete.php" data-bs-toggle="modal" data-bs-target="<?php echo $r['id']; ?>" style="color:orangered"><i class="bi bi-trash-fill function"></i></a>

                    <div class="modal fade" id="<?php echo $r['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <a href="delete.php?sid=<?php echo $r['id']; ?>"><i class="bi bi-trash-fill function"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <a onclick="return confirm('Bạn có muốn xoá sinh viên này không?')" href="delete.php?sid=<?php echo $r['id']; ?>" style="color:orangered"><i class="bi bi-trash-fill function"></i></a> -->
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-1 bg-white">
        <div class="d-grid gap-2 col-2">
          <button class="btn btn-success mt-3" type="button"><i class="bi bi-person-add"></i> Add User</button>
          <button class="btn btn-primary" type="button">Button</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>