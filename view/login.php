<div class="container home_user home_login">
  <h3>Đăng nhập</h3>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
  </div>
  <button type="submit" name="singin" class="btn btn-primary">Login</button>
  <span>Bạn chưa có tài khoản ?</span>
  <a href="index.php?page=singup" class="icon_signup">Đăng Ký</a>
</form>
</div>
<?php 
  if(isset($_POST['singin']))
  {
      $user_name = $_POST['username'];
      $pass = $_POST['pass'];
      $login_user = login_user();
      foreach ($login_user as $key => $value) {
        if ($user_name == $value['email'] && $pass == $value['pass']) {
            $_SESSION['username'] = $value['name_user'];
            echo "<script>location.href='index.php';</script>";
        }
      }
  }
 ?>