<div class='dashboard-content'>
  <div class='container'>
                
    <div class='card'>
        <div class='card-body'>
          <div class="row rowstyle tieudeupdate" >
            <div class="col" >
              <h3 >Thêm thông tin giảng viên</h3>
            </div> 
          </div>
          <form action="indexadmin.php?act=gv_insert" method="post" enctype="multipart/form-data">
          <div class="row rowstyle" >
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Mã giáo viên" name="ma" disable >
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Họ Tên" name="hoten">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
              <input type="email" class="form-control form" placeholder="Nhập email" name="email" >
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Nhập số điện thoại" name="sdt">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Ngày sinh" name="ngaysinh">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Lương" name="luong">
            </div>
             <!--Nút gửi-->
        <div class="container button">
          <div class="col-sm-12 col-md-12 col-lg-12 updatebt">
            <input type="submit" class="btn btn-outline-dark" value="Thêm thông tin" name="themgv">
          </div>
        </div>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>