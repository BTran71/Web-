<div class='dashboard-content'>
  <div class='container'>
                
    <div class='card'>
        <div class='card-body'>
          <div class="row rowstyle tieudeupdate" >
            <div class="col" >
              <h3 >Thêm thông tin học viên</h3>
            </div> 
          </div>
          <form action="indexadmin.php?act=hv_insert" method="post" enctype="multipart/form-data">
          <div class="row rowstyle" >
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Mã học viên" name="ma" >
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
            <input type="text" class="form-control form" placeholder="Lớp" name="lop">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Đóng học phí" name="donghp">
            </div>
             <!--Nút gửi-->
        <div class="container button">
          <div class="col-sm-12 col-md-12 col-lg-12 updatebt">
            <input type="submit" class="btn btn-outline-dark" value="Thêm thông tin" name="themhv">
          </div>
        </div>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>