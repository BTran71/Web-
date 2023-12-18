<?php 
    function getall_ct(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM chuongtrinh");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>