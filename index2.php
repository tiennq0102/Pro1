<?php
    session_start();
    include "view/taikhoan/header.php";
    include "model/pdo.php";
    include "model/khachhang.php";

    $thong_bao_loi = "";
    $checkEmail = loadAll_khachhang();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
        // ĐĂNG KÝ    
            case 'dangki';
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    if($_POST['email']=="" || $_POST['hoten']=="" || $_POST['password']==""){
                        $thong_bao_loi = "Bạn phải nhập đầy đủ thông tin !";
                    }
                    else if(strlen($_POST['hoten']) < 8 || strlen($_POST['password']) < 8){
                        $thong_bao_loi = "Tên hoặc mật khẩu phải lớn hơn 8 ký tự !";
                    }
                    else{//nếu đã đủ 2 điều kiện trên
                        $checkExist = 0;
                        foreach ($checkEmail as $item){
                        if($_POST['email']==$item['email']){//check email đã tồn tại trong database chưa
                            $thong_bao_loi="Email đã được đăng ký !";
                            $checkExist++;
                        } 
                        }
                        if ($checkExist == 0){ //nếu biến check = 0 thì đăng ký thành công
                            $email=$_POST['email'];
                            $ten=$_POST['hoten'];
                            $pass=$_POST['password'];
                            insert_khachhang($ten,$email,$pass);
                            $thongbao="Đã đăng kí tài khoản thành công. Đăng nhập để sử dụng các chức năng bên trong";
                        }
                    }
                }
                include "view/taikhoan/dangki.php";
                break;

        // ĐĂNG NHẬP    
            case 'dangnhap';
                foreach ($checkEmail as $item){
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        if($_POST['email']=="" || $_POST['password']==""){
                        $thong_bao_loi = "Bạn phải nhập email và mật khẩu !";
                        }else{
                            if($_POST['email'] == $item['email'] && $_POST['password']==$item['mat_khau']){
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $checkuser = checkuser($email,$password);
                                if(is_array($checkuser)){
                                    $_SESSION['user']=$checkuser;
                                    // echo '<pre>';
                                    // var_dump($_SESSION['user']);
                                    // var_dump($checkuser) ;
                                    header('Location:index.php');
                                }
                            }else{
                                $thong_bao_loi = "Email hoặc mật khẩu không đúng !";
                            }
                        }
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;

        // QUÊN MẬT KHẨU
            case 'forgotmatkhau':
                if(isset($_POST['gui'])&&($_POST['gui'])){
                    $email=$_POST['email'];
                    $checkemail = checkemail($email);

                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu tài khoản của bạn là:".$checkemail['mat_khau'];
                    }else{
                        $thongbao="Email không tồn tại. Vui lòng kiểm tra lại hoặc đăng kí!!"; 
                    }
                }
                include "view/taikhoan/forgotpass.php";
                break ;
            default:
                include "view/taikhoan/dangnhap.php";
                break;
        }
    }else{
        include "view/taikhoan/dangnhap.php";
    }

    include "view/taikhoan/footer.php"
?>