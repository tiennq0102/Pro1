<?php
    include "../model/pdo.php";
    include "LEFT.php";
    include "global.php";
    include "../model/loaihang.php";
    include "../model/donhang.php";
    include "../model/khachhang.php";
    include "../model/sanpham.php";
    include "../model/baiviet.php";
    include "../model/binhluan.php";
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];

        switch ($act) {
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // START QUẢN LÝ LOẠI HÀNG
            // DANH SÁCH LOẠI HÀNG
            case 'listdm':
                $listloaihang= loadAll_loaihang();
                include "loaihang/list.php";
                break;

            // THÊM LOẠI HÀNG
            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_loaihang($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "loaihang/add.php";
                break;

            // XÓA LOẠI HÀNG
            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_loaihang($_GET['id']);
                }
                $listloaihang = loadAll_loaihang();
                include "loaihang/list.php";
                break;

            // SỬA LOẠI HÀNG
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $danhmuc =loadOne_loaihang($_GET['id']); 
                } 
                include "loaihang/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['maloai'];
                    update_loaihang($tenloai,$id);
                    $thongbao = "Cập nhật thành công";
                }
                $listloaihang = loadAll_loaihang();
                include "loaihang/list.php";
                break;
        // END QUẢN LÝ LOẠI HÀNG
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // START QUẢN LÝ SẢN PHẨM
            // THÊM SẢN PHẨM
            case 'addsp':
                // kiểm tra ngày dùng có click vào nút add không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $maloaihang=$_POST['maloaihang'];
                    $tensp=$_POST['tensanpham'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinhsanpham']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhsanpham"]["name"]);
                    move_uploaded_file($_FILES["hinhsanpham"]["tmp_name"], $target_file);
                // if (move_uploaded_file($_FILES["hinhsanpham"]["tmp_name"], $target_file)) {
                    
                //     // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                // } else {
                //     // echo "Sorry, there was an error uploading your file.";
                // }
                    insert_sanpham($tensp,$gia,$hinh,$mota,$maloaihang);
                    $thongbao = "Thêm thành công";
                }
                $listloaihang = loadAll_loaihang();
                include "sanpham/add.php";
                break;

            // DANH SÁCH SẢN PHẨM
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['keyword'];
                    $iddm=$_POST['tenloaihang'];
                }else{
                    $kyw = '';
                    $iddm = 0; 
                }
            $listloaihang = loadAll_loaihang();
            $listsanpham = loadAll_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;

            // XÓA SẢN PHẨM
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_sanphamCT($_GET['id']);
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            // CẬP NHẬT SẢN PHẨM
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $sanpham =loadOne_sanpham($_GET['id']); 
                    } 
                    $listloaihang = loadAll_loaihang();
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $masp=$_POST['id'];
                    $maloai=$_POST['maloaihang'];
                    $tensanpham=$_POST['tensanpham'];
                    $price=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinhsanpham']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["hinhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($masp,$maloai,$tensanpham,$price,$mota,$hinh);
                    $thongbao = "Cập nhật thành công";
                }
                $listloaihang = loadAll_loaihang();
                $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
        // END QUẢN LÝ SẢN PHẨM
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // START QUẢN LÝ ĐƠN HÀNG
            // DANH SÁCH ĐƠN HÀNG
            case 'listdonhang':
                $listhoadon = loadall_hoadon();
                include "donhang/list.php";
                break;
            // XÓA ĐƠN HÀNG
            case 'xoadh':
                if(isset($_GET['id'])&&$_GET['id']>0 ){
                    delete_CTdonhang($_GET['id']);
                    delete_donhang($_GET['id']);
                }
                $listhoadon = loadall_hoadon();
                include "donhang/list.php";
                break;
            // CẬP NHẬT ĐƠN HÀNG
            case 'suadh':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $hoadon =  loadOne_hoadon($_GET['id']);
                }
                include "donhang/update.php";
                break; 
            case 'updatedh':
                if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                    $id=$_POST['id'];
                    $trang_thai=$_POST['trang_thai'];
                    // update_CThoadon($id);
                    update_hoadon($id,$trang_thai);
                }
                $listhoadon = loadall_hoadon();
                include "donhang/list.php";
                break;
        // END QUẢN LÝ ĐƠN HÀNG        
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // START QUẢN LÝ BÀI VIẾT    
            // DANH SÁCH BÀI VIẾT
            case 'listbv':
                $listbaiviet = loadAll_baiviet();
                include "baiviet/list.php";
                break;
            // THÊM BÀI VIẾT
            case 'addbv':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tieude=$_POST['tieude'];
                    $noidung=$_POST['noidungbv'];
                    $hinh = $_FILES['hinhbv']['name'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngay_dang = date("d/m/Y");
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhbv"]["name"]);
                    if (move_uploaded_file($_FILES["hinhbv"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_baiviet($tieude,$noidung,$hinh,$ngay_dang);
                    $thongbao = "Thêm thành công";
                }
                include "baiviet/add.php";
                break;
            // CẬP NHẬT BÀI VIẾT    
            case 'suabv':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $baiviet =loadOne_baiviet($_GET['id']); 
                    } 
                include "baiviet/update.php";
                break;
            case 'updatebv';
            if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                $mabv=$_POST['id'];
                $tieude=$_POST['tieude'];
                $noidung=$_POST['noidungbv'];
                $hinh = $_FILES['hinhbv']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhbv"]["name"]);
                move_uploaded_file($_FILES["hinhbv"]["tmp_name"],$target_file);
                update_baiviet($tieude,$noidung,$hinh,$mabv);
                $thongbao = "Cập nhật thành công";
            }
            $listbaiviet = loadAll_baiviet();
            include "baiviet/list.php";
            break;
            // XÓA BÀI VIẾT
            case 'xoabv';
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_baiviet($_GET['id']);
                }
                $listbaiviet = loadAll_baiviet();
            include "baiviet/list.php";
            break;
        //END QUẢN LÝ BÀI VIẾT
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // START QUẢN LÝ BÌNH LUẬN
            // DANH SÁCH BÌNH LUẬN
            case 'listbl':
                $list_binhluan=loadall_binhluan_admin();
                // var_dump($list_binhluan);
                include "binhluan/list.php";
                break;
            // XÓA BÌNH LUẬN
            case 'xoabl':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $list_binhluan = loadall_binhluan_admin();
                include "binhluan/list.php";
                break;
        // END QUẢN LÝ BÌNH LUẬN
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
        // START QUẢN LÝ KHÁCH HÀNG
            // DANH SÁCH KHÁCH HÀNG
            case 'listkh':
                $listkhachhang = loadall_khachhang();
                include "khachhang/list.php";
                break;
            // XÓA KHÁCH HÀNG
            case 'xoakh':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_CTHDkhachhang($_GET['id']);
                    delete_HDkhachhang($_GET['id']);
                    delete_khachhang($_GET['id']);
                }
                $listkhachhang = loadall_khachhang();
                include "khachhang/list.php";
                break;
            // SỬA KHÁCH HÀNG    
            case 'suakh':
                if(isset($_GET['id'])&&($_GET['id']>0)){

                    $khachhang=loadone_khachhang($_GET['id']);
                }
                include "khachhang/update.php";
                break;
            // CẬP NHẬT VAI TRÒ TÀI KHOẢN
            case 'updatekh_admin':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ma_khach_hang = $_POST['id'];
                    $vai_tro = $_POST['vai_tro'];
                    update_khachhang_admin($ma_khach_hang,$vai_tro);
                    // $thongbao = "Cập nhật thành công";
                }
                $listkhachhang=loadall_khachhang();
                include "khachhang/list.php";
                break;
            // THÊM KHÁCH HÀNG
            case 'addkh':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $fullname =  $_POST['fullname'];
                    $matkhau =  $_POST['matkhau'];
                    $email =  $_POST['email'];
                    $vai_tro =   $_POST['vai_tro'];
                    insert_khachhang_admin($fullname,$matkhau,$email,$vai_tro);
                    $thongbao = "Thêm thành công";
                }
                include "khachhang/add.php";
                break;
        // END QUẢN LÝ KHÁCH HÀNG
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            default:
                $spxemtop1=showsp_xemnhieu();
                $spmoitop1=showsp_moinhat();
                $listtk=loadall_thongke();
                $tong_doanh_thu = tong_doanh_thu();
                $trung_binh_dt = tinh_tb_doanh_thu();
                include "home.php";
                break;
        }
    }else{
        $spxemtop1=showsp_xemnhieu();
        $spmoitop1=showsp_moinhat();
        $listtk=loadall_thongke();
        $tong_doanh_thu = tong_doanh_thu();
        $trung_binh_dt = tinh_tb_doanh_thu();
        include "home.php";
    }
?>