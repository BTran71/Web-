<?php 
  if(is_array($gvct)){
    extract($gvct);
  }
  foreach($gvct as $ds){?>
<div class='dashboard-content'>
  <div class='container'>
                
    <div class='card'>
        <div class='card-body'>
          <div class="row rowstyle tieudeupdate" >
            <div class="col" >
              <h3 >Sửa thông tin giảng viên</h3>
            </div> 
          </div>
          <form action="indexadmin.php?act=gv_update" method="post" enctype="multipart/form-data">
          <div class="row rowstyle" >
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Mã giáo viên" name="ma" disable value="<?php echo $ds['id'];}?>" readonly>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Họ Tên" name="hoten" value="<?php if(isset($ds['tengv'])&&($ds['tengv']!="")) echo $ds['tengv'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
              <input type="email" class="form-control form" placeholder="Nhập email" name="email" value="<?php if(isset($ds['email'])&&($ds['email']!="")) echo $ds['email'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Nhập số điện thoại" name="sdt"  value="<?php if(isset($ds['sdt'])&&($ds['sdt']!="")) echo $ds['sdt'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Ngày sinh" name="ngaysinh"  value="<?php if(isset($ds['ngaysinh'])&&($ds['ngaysinh']!="")) echo $ds['ngaysinh'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Lương" name="luong"  value="<?php if(isset($ds['luong'])&&($ds['luong']!="")) echo $ds['luong'];?>">
            </div>
             <!--Nút gửi-->
        <div class="container button">
          <div class="col-sm-12 col-md-12 col-lg-12 updatebt">
            <input type="hidden" name="id" value="<?php if(isset($ds['id'])&&($ds['id']>0)) echo $ds['id'];?>">
            <input type="submit" class="btn btn-outline-dark" value="Cập nhật thông tin" name="capnhatgv">
          </div>
        </div>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>
  