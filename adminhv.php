
            <div class='dashboard-content'>
                <div class='container'>
                    <form action="indexadmin.php?act=inserthvform" method="post" enctype="multipart/form-data" class="gvinsertbt">
                        <input type="submit" value="Thêm học viên" name="insert">
                    </form>
                    <div class='card'>
                        <div class='card-body'>
                            <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Mã học viên</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Lớp</th>
                                    <th scope="col">Đóng học phí</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  if(isset($kq)&&(count($kq)>0)){
                                      foreach($kq as $ds){
                                        if($ds['donghp']==1){
                                            $out="Đã đóng học phí";
                                        }
                                        else
                                            $out="Chưa đóng học phí";
                                        echo '<tbody>
                                        <tr>
                                          <th>'.$ds['id'].'</th>
                                          <td>'.$ds['tenhv'].'</td>
                                          <td>'.$ds['email'].'</td>
                                          <td>'.$ds['sdt'].'</td>
                                          <td>'.$ds['lop'].'</td>
                                          <td>'.$out.'</td>
                                          <td><a href="indexadmin.php?act=deletehv&id='.$ds['id'].'">Xóa</a></td>
                                          <td><a href="indexadmin.php?act=updateformhv&id='.$ds['id'].'"">Sửa</a></td>
                                        </tr></tbody>';
                                      }
                                  }
                                ?>  
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
    });
</script>

</body>
</html>