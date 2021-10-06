<div class="container home_user home_singup">
  <h3>Đăng ký tài khoản</h3>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Họ tên</label>
    <input type="text" class="form-control" name = "user" id="exampleInputEmail1"  placeholder="Nhập họ tên">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1"  placeholder="Nhập số điện thoại">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1"placeholder="mật khẩu">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="continue_pass" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Tôi không phải người máy</label>
  </div>
  <button type="submit" name="singup" class="btn btn-primary">Đăng ký</button>
</form>
</div>
<?php 
  if (isset($_POST['singup'])) {
    // code...
    echo $user = $_POST['user'];
    echo $phone = $_POST['phone'];
    echo $email = $_POST['email'];
    echo $pass = $_POST['pass'];
    echo $continue_pass = $_POST['continue_pass'];
    $add_user = add_user($user,$email,$phone,$pass);
    echo "<script>alert('Đăng ký thành công');";
    echo "location.href='index.php?page=login';</script>";
  }
 ?>