<?php
    function loadAll_khachhang(){
        $sql="select*from khach_hang order by ma_khach_hang desc";
        $listkh= pdo_query($sql);
        return $listkh;
    }
    function loadone_khachhang($id){
        $sql="select*from khach_hang where ma_khach_hang=".$id;
        $kh= pdo_query_one($sql);
        return $kh;
    }
    function insert_khachhang($ten,$email,$pass){
        $sql = "insert into khach_hang(ten_khach_hang,email,mat_khau) values ('$ten','$email','$pass')";
        pdo_execute($sql) ;
    }
    function checkuser($email,$password){
        $sql = "select * from khach_hang where email='".$email."' AND mat_khau='".$password."'";
        $khachhang = pdo_query_one($sql);
        return $khachhang;
    }
    function checkemail($email){
        $sql = "select * from khach_hang where email='".$email."'";
        $khachhang = pdo_query_one($sql);
        return $khachhang;
    }
    function updatettkh(){
        $sql="update";
    }
//////////////////////////
    //3 Thêm khách hàng từ Backend
    function insert_khachhang_admin($ten_khach_hang, $mat_khau,$email, $vai_tro){
        $sql = "insert into khach_hang(ten_khach_hang,mat_khau,email,vai_tro) values ('$ten_khach_hang','$mat_khau','$email','$vai_tro')";
        pdo_execute($sql);
    }
    //4. Cập nhật khách hàng
    function update_khachhang($tenkh,$pass,$email,$sdt,$address,$id){
        $sql = "update khach_hang set ten_khach_hang='".$tenkh."',mat_khau='".$pass."',email='".$email."',sdt='".$sdt."',dia_chi='".$address."' where ma_khach_hang=".$id;
        pdo_execute($sql);
    }
    // function update_khachhang($ma_khach_hang,$vai_tro){
    //     $sql = "update khach_hang set vai_tro='".$vai_tro."'where ma_khach_hang=".$ma_khach_hang;
    //     pdo_execute($sql);
    // }
    //4.1 Cập nhật vai trò từ Backend
    function update_khachhang_admin($ma_khach_hang,$vai_tro){
        $sql = "update khach_hang set vai_tro='".$vai_tro."' where ma_khach_hang=".$ma_khach_hang;
        pdo_execute($sql);
    }
    //5. Xóa khách hàng khi không còn ràng buộc
    function delete_khachhang($ma_khach_hang){
        $sql = "delete from khach_hang where ma_khach_hang=".$ma_khach_hang;
        pdo_execute($sql);
    }
    //5.1 Xóa hóa đơn khách hàng cần xóa
    function delete_HDkhachhang($ma_khach_hang){
        $sql = "delete from hoa_don where ma_khach_hang=".$ma_khach_hang;
        pdo_execute($sql);
    }
    //5.2 Xóa chi tiết hóa đơn của khách hàng cần xóa
    function delete_CTHDkhachhang($ma_khach_hang){
        $sql = "delete from chi_tiet_hoa_don";
        $sql.= " where ma_hoa_don in (select ma_hoa_don from hoa_don where ma_khach_hang=".$ma_khach_hang.")";
        pdo_execute($sql);
    }
    //6. Check khách hàng
    function check_khachhang($email, $mat_khau){
        $sql = "select * from khach_hang where email='".$email."' and mat_khau='".$mat_khau."'";
        $saveKh=pdo_query_one($sql);
        return $saveKh;
    }
    //7. Vai trò khách hàng
    function get_vtkh($n){
        switch ($n) {
            case '0':
                $tt="Khách hàng";
                break;
            case '1':
                $tt="Admin";
                break;
            default:
                $tt="Khách hàng";
                break;
        }
        return $tt;
    }
?>