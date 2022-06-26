<?php
    include "model/pdo.php";
    include "view/header.php";
    include "global.php";
    include "model/loaihang.php";
    include "model/donhang.php";
    include "model/khachhang.php";
    include "model/sanpham.php";
    include "model/baiviet.php";
    include "model/locgia.php";

    $thong_bao_loi = ""; //THÔNG BÁO LỖI

    $locgia = loadAll_gialoc(); //LỌC GIÁ

    $sptheodm1=loadAll_sanpham_theodm1(27);
    $sptheodm2=loadAll_sanpham_theodm2(5);
    $sptheodm3=loadAll_sanpham_theodm3(14);
    $sptheodm4=loadAll_sanpham_theodm4(13);

    if(isset($_GET['act'])){
        $act=$_GET['act'];

        switch ($act) {
            // Start
            case 'listbv':
                $listbaiviet=loadAll_baiviet();
                $listbaivietnew= loadAll_baiviet_new();
                include "view/baiviet/baiviet.php";
                break;
            case 'baivietCT':
                if(isset($_GET['id'])&&$_GET['id']>0){
                    $baiviet= loadOne_baiviet($_GET['id']);
                    $listbaivietnew= loadAll_baiviet_new();
                }
                include "view/baiviet/baivietCT.php";
                break;
            case 'tttk':
                include "view/taikhoan/thongtintk.php";
                break;
            ////////////////////////////////////////////
            //CẬP NHẬT TÀI KHOẢN
            case 'sua-ttkh':
                if(isset($_GET['id']) && $_GET['id']){
                    $tk=loadone_khachhang($_GET['id']);
                }
                include "view/taikhoan/updatethongtintk.php";
                break;
            case 'updatethongtintk':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    if($_POST['tenkh']=="" || $_POST['pass']=="" || $_POST['email']==""){
                        $thong_bao_loi = "Bạn phải nhập đầy đủ thông tin !";
                    }
                    else if(strlen($_POST['tenkh']) < 8 || strlen($_POST['pass']) < 8){
                        $thong_bao_loi = "Tên hoặc mật khẩu phải lớn hơn 8 ký tự !";
                    }
                    else if (!strlen($_POST['sdt']) == 10 ){
                        $thong_bao_loi = "Số điện thoại phải bằng 10 ký tự !";
                    }
                    else {
                    $id = $_POST['id'];
                    $tenkh=$_POST['tenkh'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    update_khachhang($tenkh,$pass,$email,$sdt,$address,$id);
                    // $_SESSION['user']= checkuser($tenkh,$pass);
                    // var_dump($_SESSION['user']);
                    // header("Location:index.php?act=updatethongtintk");
                    session_unset(); //ĐĂNG XUẤT BẮT ĐĂNG NHẬP LẠI ĐỂ BẢO MẬT THÔNG TIN
                    echo '<script>window.location.href="index2.php?act=dangnhap"</script>';
                    }
                }
                include "view/taikhoan/updatethongtintk.php";
                break;
            //TÀI KHOẢN KHÁCH HÀNG -> ĐƠN HÀNG CỦA TÔI
            case 'dhct':
                if(isset($_GET['id'])){
                    //danh sách theo khách hàng
                    $list_dh_fl_kh = load_hoadon_follow_kh($_GET['id']);
                }
                include "view/taikhoan/donhangcuatoi.php";
                break;
            //TÀI KHOẢN KHÁCH HÀNG -> ĐƠN HÀNG CỦA TÔI -> CHI TIẾT ĐƠN HÀNG
            case 'ctdh': 
                if(isset($_GET['id'])){
                    $list_detail_dh_fl_kh = load_detail_hoadon_follow_kh($_GET['id']);
                }
                include "view/taikhoan/chitietdonhang.php";
                break;
            ////////////////////////////////////////////
            //START SHOW SẢN PHẨM THEO LOẠI HÀNG
            case 'maytinh':
                $sptheodm1=loadAll_sanpham_theodm1(27);
                $sptheodm2=loadAll_sanpham_theodm2(5);
                include "view/maytinh.php";
                break;
            case 'linhkien':
                $sptheodm4=loadAll_sanpham_theodm4(13);
                include "view/linhkien.php";
                break;
            case 'phukien':
                $sptheodm3=loadAll_sanpham_theodm3(14);
                include "view/phukien.php";
                break;
            //END SHOW SẢN PHẨM THEO LOẠI HÀNG

            //START TÌM KIẾM SẢN PHẨM 
            case 'search_sp':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&& ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                   
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                include "view/sanpham.php";
                break;
            //START SẢN PHẨM CHI TIẾT 
            case 'sanphamct';
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadOne_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($ma_loai_hang,$id);

                    include "view/sanphamct.php";
                }
                else{
                    include "view/home.php";
                }
                break;
            //START LỌC SẢN PHẨM 
            case 'sanphamloc';
                if(isset($_GET['gialoc'])){
                    $gia = preg_split("[\s]",$_GET['gialoc']);
                    $gia1 = preg_split("[\-]",$gia[0]);
                    $from = $gia1[0];
                    $to = $gia1[1];
                    $from *=1000000;
                    $to *=1000000;
                    $load_sp_gia = load_sanpham_gia($from,$to);
                }
                include "view/sanphamloc.php";
            break;
            ///////////////////////////////////////////////
            //START GIỎ HÀNG
            case 'viewcart':
                include "view/giohang/xemgiohang.php";
                break;
            case 'addtocart':
                if(isset($_GET['id'])){
                    $sp = loadOne_sanpham($_GET['id']);
                    // var_dump($sp);
                    $id = $_GET['id']; //lấy id sản phẩm trên thanh url
                    if(empty($_SESSION['cart'])){//Thêm giỏ hàng lần đầu tiên
                        $cart[$id] = array(
                            'id'=>$_GET['id'],
                            'so_luong'=>1,
                            'ten_sp'=>$sp['ten_san_pham'],
                            'don_gia'=>$sp['don_gia'],
                            'hinh_sp'=>$sp['hinh_san_pham']
                        );
                    }
                    else {//Thêm giỏ hàng lần thứ 2+
                        $cart=$_SESSION['cart'];
                        if(array_key_exists($id,$cart)){ //Kiểm tra id sản phẩm đã tồn trong giỏ hàng hay chưa. Nếu có thực hiện công việc
                            $cart[$id] = array(
                                'id'=>$_GET['id'],
                                'so_luong'=>(int)$cart[$id]['so_luong']+1,
                                'ten_sp'=>$sp['ten_san_pham'],
                                'don_gia'=>$sp['don_gia']+=$sp['don_gia'],
                                'hinh_sp'=>$sp['hinh_san_pham']
                            );
                        }
                        else //Kiểm tra id sản phẩm đã tồn trong giỏ hàng hay chưa. Nếu chưa thực hiện công việc
                        {
                            $cart[$id] = array(
                                'id'=>$_GET['id'],
                                'so_luong'=>1,
                                'ten_sp'=>$sp['ten_san_pham'],
                                'don_gia'=>$sp['don_gia'],
                                'hinh_sp'=>$sp['hinh_san_pham']
                            );
                        }
                    }
                    $_SESSION['cart'] = $cart;
                    include "view/giohang/xemgiohang.php";
                }
                break;

            //XÁC NHẬN ĐẶT HÀNG
            case 'sendcart':
                if(isset($_POST['submit-hoa_don']) && ($_POST['submit-hoa_don'])){
                    if($_POST['ten_khach_hang']=="" || $_POST['dia_chi']=="" || $_POST['sdt']==""){
                        $thong_bao_loi="Bạn phải nhập đầy đủ thông tin !";
                    }else if (strlen($_POST['sdt']) != 10 ){
                        $thong_bao_loi = "Số điện thoại phải bằng 10 ký tự !";
                    }else {
                        $_SESSION['tt_hoa_don'] = array (
                            'ma_khach_hang'=>$_POST['ma_khach_hang'],
                            'ten_khach_hang'=>$_POST['ten_khach_hang'],
                            'dia_chi'=>$_POST['dia_chi'],
                            'sdt'=>$_POST['sdt'],
                            'phuong_thuc_tt'=>$_POST['phuong_thuc_tt']
                        );
                        include "view/giohang/xacnhantrunggian.php";
                    }
                }
                include "view/giohang/xacnhandathang.php";
                break;
            case 'confirm_hd':
                //Bắt đầu khởi tạo biến để cho vào câu lệnh insert vào bảng hóa đơn
                $ma_khach_hang=$_SESSION['tt_hoa_don']['ma_khach_hang'];
                $ten_khach_hang=$_SESSION['tt_hoa_don']['ten_khach_hang'];
                $dia_chi=$_SESSION['tt_hoa_don']['dia_chi'];
                $sdt=$_SESSION['tt_hoa_don']['sdt'];
                $phuong_thuc_tt=$_SESSION['tt_hoa_don']['phuong_thuc_tt'];
                $tong_tien=$_SESSION['tong_tien'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydathang = date("H:i:s a d/m/Y");
                insert_hoadon ($ma_khach_hang,$ten_khach_hang,$dia_chi,$sdt,$phuong_thuc_tt,$tong_tien,$ngaydathang);
                //Bắt đầu khởi tạo biến để cho vào câu lệnh insert vào bảng chi tiết hóa đơn
                $cart = $_SESSION['cart']; //lấy thông tin từ giỏ hàng của khách hàng
                $ma_hoa_don_new = load_new_hoa_don(); //Lấy mã hóa đơn mới nhất vừa thêm
                foreach ($cart as $item){ //Duyệt session cart lấy sản phẩm khách hàng cần đặt
                    $ma_san_pham = $item['id'];
                    $so_luong = $item['so_luong'];
                    $don_gia = $item['don_gia'];
                    $hinh_san_pham = $item['hinh_sp'];
                    insert_ct_hoa_don($ma_hoa_don_new,$ma_san_pham, $so_luong, $don_gia, $hinh_san_pham);
                }
                include "view/giohang/dathangthanhcong.php";
                break;
            //XÓA 1 ITEM TRONG GIỎ HÀNG
            case 'del1item':
                unset($_SESSION['cart'][$_GET['id']]);
                include "view/giohang/xemgiohang.php";
                break;
            //XÓA TẤT CẢ TRONG GIỎ HÀNG
            case 'delcart':
                unset($_SESSION['cart']);
                include "view/giohang/xemgiohang.php";
                break;    
            //END GIỎ HÀNG
            //////////////////////////////////////////////////
            //ĐĂNG XUẤT
            case 'thoat':
                include "view/taikhoan/thoat.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
