
 <!--Form dang nhap-->
 <div class="container-fluid">
      <form action="index.php?act=login" class="khung" method="post">
        <h3 class="text-center">Đăng nhập</h3>
        <div class="form-floating mb-3 mt-5">
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="user">
          <label for="email">Tài khoản</label>
        </div>
        <div class="form-floating mb-3 mt-5">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
          <label for="pwd">Mật khẩu</label>
          <div id="emailhelp" class="form-text mb-3 mt-2"><a href="">Quên mật khẩu</a></div>
          
        </div>
        <input type="submit" class="btn btn-primary mb-3 mt-3 custom" name="login" value="Đăng nhập">
      </form>
    </div>