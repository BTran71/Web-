<?php
    function checkuser($user,$pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM nguoidung where user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if(count($kq)>0)
            return $kq[0]['role'];
        else
            return 0;
    }
    function getuser_info($user,$pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM nguoidung where user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>
