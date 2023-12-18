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
                    $role=checkuser($user,$pass);
                    $_SESSION['role']=$role;
                    if($role==1){
                        if(isset($_SESSION['role'])&&($_SESSION['role']==1))
                            header('location:indexadmin.php'); 
                        else if(isset($_SESSION['role'])&&($_SESSION['role']==0))
                        {
                            header('location:indexadmin'); 
                        }
                    }
                    
                    else{
                        $txt_error="Nhập sai tài khoản hoặc mật khẩu"; 
                        include "view/dangnhap.php";
                    }
                }
                //include "view/dangnhap.php";
                break;
            default:
                # code...
                break;
        }
    }
    else{include "view/home.php";}

    include "view/footer.php";

?>