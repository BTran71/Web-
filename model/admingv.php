<?php 
    function getall_gv(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM giangvien");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function delgv($id){
        $conn=connectdb();
        $sql="DELETE FROM giangvien where id= '".$id."'";
        $conn->exec($sql);
    }
    function update_gv($id,$tengv,$email,$sdt,$ngaysinh,$luong){
        $conn=connectdb();
        $sql = "UPDATE giangvien SET tengv='".$tengv."',email='".$email."',sdt='".$sdt."',ngaysinh='".$ngaysinh."',luong='".$luong."' WHERE id='".$id."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function insert_gv($ten,$email,$sdt,$ngaysinh,$luong){
        $conn=connectdb();
        $sql = "INSERT INTO giangvien (tengv,email,sdt,luong,ngaysinh) values ('$ten','$email','$sdt','$luong','$ngaysinh')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getonegv($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM giangvien where id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function kiem_tra($chuoi) {
        // Duyệt qua từng kí tự trong chuỗi
        for ($i = 0; $i < strlen($chuoi); $i++) {
            // Kiểm tra xem kí tự có phải là số hay không
            if (ctype_digit($chuoi[$i])) {
                // Nếu có ít nhất một kí tự là số, trả về false
                return false;
            }
        }
    
        // Nếu mọi kí tự đều không phải số, trả về true
        return true;
    }
    function kiem_traid($id) {
        $conn=connectdb();
        $sql = "SELECT * FROM giangvien WHERE id =:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    function kiem_trasdt($chuoi) {
        // Duyệt qua từng kí tự trong chuỗi
        for ($i = 0; $i < strlen($chuoi); $i++) {
        // Kiểm tra xem kí tự có phải là số hay không
            if ((strlen($chuoi)==10)&&is_numeric($chuoi[$i])) {
                // Nếu có kí tự là số, và có 10 kí tự trả về true
                return true;
            }
        }
      // Nếu mọi kí tự đều không phải số, trả về false
        return false;
    }
?>