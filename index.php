<?php 
    session_start();
    ob_start();
    include "model/connectdb.php";
    include "model/chuongtrinh.php";
    include "model/user.php";
    include "view/header.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'chuongtrinh':
                $kq=getall_ct();
                include "view/chuongtrinhhoc.php";
                break;
            case 'dangnhap':
                include "view/dangnhap.php";
                break;
            case 'login':
                if(isset($_POST['login'])&& ($_POST['login'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $kq=getuser_info($user,$pass);
                    $role=$kq[0]['role'];
                    if($kq[0]['role']==1){
                       $_SESSION['role']=$role;
                        if(isset($_SESSION['role'])&&($_SESSION['role']==1))
                            header('location:indexadmin.php'); 
                    }
                    else if($kq[0]['role']==0){
                        $_SESSION['role']=$role;
                        header('location:index.php?act=dangnhap'); 
                    }
                    else{
                        $txt_error="Nhập sai toàn khoản hoặc mật khẩu";
                        header('location:index.php?act=dangnhap'); 
                    }
                }
                break;
            default:
                # code...
                break;
        }
    }
    else{include "view/home.php";}

    include "view/footer.php";

?>