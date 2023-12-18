<?php 
    function getall_hv(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM hocvien");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function delhv($id){
        $conn=connectdb();
        $sql="DELETE FROM hocvien where id= '".$id."'";
        $conn->exec($sql);
    }
    function update_hv($id,$tenhv,$email,$sdt,$lop,$donghp){
        $conn=connectdb();
        $sql = "UPDATE hocvien SET tenhv='".$tenhv."',email='".$email."',sdt='".$sdt."',lop='".$lop."',donghp='".$donghp."' WHERE id='".$id."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function insert_hv($id,$ten,$email,$sdt,$lop,$donghp){
        $conn=connectdb();
        $sql = "INSERT INTO hocvien (id,tenhv,email,sdt,lop,donghp) values ('$id','$ten','$email','$sdt','$lop','$donghp')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getonehv($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM hocvien where id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function kiem_trahv($chuoi) {
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
    function kiem_traidhv($id) {
        $ds=getall_gv();
        foreach($ds as $tim){
            if($tim['id']==$id){
                return false;
            }
        }
        return true;
    }
    /*function kiem_trasdt($chuoi) {
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
    }*/
?>