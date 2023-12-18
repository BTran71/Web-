<?php 
    session_start();
    ob_start();
    include "model/connectdb.php";
    include "headeradmin.php";
    include "model/admingv.php";
    include "model/adminhv.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'qlgv':
                $kq=getall_gv();
                include "admingv.php";  
                break;
            case 'deletegv':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delgv($id);
                }
                $kq=getall_gv();
                include "admingv.php";
                break;
           
            case 'gv_update':
                if(isset($_POST['capnhatgv'])&&($_POST['capnhatgv'])){
                    $id=$_POST['ma'];
                    $name=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $birthday=$_POST['ngaysinh'];
                    $luong=$_POST['luong'];
                    if ((kiem_tra($name)==true)&&(kiem_trasdt($sdt))){
                        update_gv($id,$name,$email,$sdt,$birthday,$luong);
                    }
                }
                $kq=getall_gv();
                include "admingv.php";
                break;
            case 'updateform':
                //dữ liệu chi tiết theo get id
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $gvct=getonegv($_GET['id']);
                }
                //load dữ liệu giảng viên
                include "updategvform.php";
                break;
            case 'insertgvform':
                include "insertgv.php";
                break;   
            case 'gv_insert':
                if(isset($_POST['themgv'])&&($_POST['themgv'])){
                    $id=$_POST['ma'];
                    $name=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $birthday=$_POST['ngaysinh'];
                    $luong=$_POST['luong'];
                    if ((kiem_tra($name)==true)&&(is_numeric($sdt))&&(null!==(getonegv($id)))){
                       insert_gv($name,$email,$sdt,$birthday,$luong);
                    }
                }
                $kq=getall_gv();
                include "admingv.php";
                break;
            case 'qlhv':
                $kq=getall_hv();
                include "adminhv.php";
                break;
            case 'deletehv':
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    delhv($id);
                }
                $kq=getall_hv();
                include "adminhv.php";
                break;
            case 'updateformhv':
                //dữ liệu chi tiết theo get id
                $hvct=getonehv($_GET['id']);
                //var_dump($hvct);
                //if(isset($_GET['id'])&&($_GET['id']>0)){
                    
                //}
                //load dữ liệu học viên
                include "updatehvform.php";
                break;
            case 'hv_update':
                if(isset($_POST['capnhathv'])&&($_POST['capnhathv'])){
                    $id=$_POST['ma'];
                    $name=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $lop=$_POST['lop'];
                    $hp=$_POST['donghp'];
                    if ((kiem_tra($name)==true)){
                        update_hv($id,$name,$email,$sdt,$lop,$hp);
                    }
                }
                $kq=getall_hv();
                include "adminhv.php";
                break;
            case 'inserthvform':
                include "inserthv.php";
                break;   
            case 'hv_insert':
                if(isset($_POST['themhv'])&&($_POST['themhv'])){
                    $id=$_POST['ma'];
                    $name=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $lop=$_POST['lop'];
                    $hp=$_POST['donghp'];
                    if ((kiem_tra($name)==true)&&(is_numeric($sdt))&&(null==(getonehv($id)))){
                        insert_hv($id,$name,$email,$sdt,$lop,$hp);
                    }
                    else{
                        echo "<div class='toast show'>
                        <div class='toast-header'>
                          Lỗi
                          <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
                        </div>
                        <div class='toast-body'>
                          Nhập không đúng cú pháp
                        </div>
                      </div>";
                    }
                }
                $kq=getall_hv();
                include "adminhv.php";
                break;
        }
            
    }
?>