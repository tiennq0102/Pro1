<?php
    function loadall_hoadon(){
        $sql = "select DISTINCT hoa_don.ma_hoa_don, ten_khach_hang, sum(chi_tiet_hoa_don.so_luong) as so_luong, ngay_dat_hang, trang_thai, tong_tien";
        $sql.=" from hoa_don inner join chi_tiet_hoa_don on hoa_don.ma_hoa_don = chi_tiet_hoa_don.ma_hoa_don ";
        $sql.=" group by ma_hoa_don";
        $listhoadon=pdo_query($sql);
        return $listhoadon;
    }
    function loadOne_hoadon($id){
        $sql="select*from hoa_don where ma_hoa_don=".$id;
        $hoadon = pdo_query_one($sql);
        return $hoadon;
    }
    function update_hoadon($id,$tt){
        $sql="update hoa_don set trang_thai='".$tt."' where ma_hoa_don='".$id."' ";
        pdo_execute($sql);
    }
    function update_CThoadon($id){
        $sql="update chi_tiet_hoa_don set ma_hoa_don='".$id."'";
        pdo_execute($sql);
    }
    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lý";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Hoàn tất";
                break;
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function delete_CTdonhang($ma_hoa_don){
        $sql="delete from chi_tiet_hoa_don where ma_hoa_don=".$ma_hoa_don;
        pdo_execute($sql);
    }
    function delete_donhang($ma_hoa_don){
        $sql="delete from hoa_don where ma_hoa_don=".$ma_hoa_don;
        pdo_execute($sql);
    }
    //Load các đơn hàng của khách hàng 
    function load_hoadon_follow_kh ($ma_khach_hang){
        $sql="select DISTINCT hoa_don.ma_hoa_don, sum(chi_tiet_hoa_don.so_luong) as slsp, trang_thai, ngay_dat_hang, tong_tien";
        $sql.=" from hoa_don join chi_tiet_hoa_don on hoa_don.ma_hoa_don = chi_tiet_hoa_don.ma_hoa_don";
        $sql.=" where ma_khach_hang=".$ma_khach_hang;
        $sql.=" group by ma_hoa_don";
        $listdh_fl_kh=pdo_query($sql);
        return $listdh_fl_kh;
    }
    //Load thông tin chi tiết của từng đơn hàng theo khách hàng
    function load_detail_hoadon_follow_kh ($ma_hoa_don){
        $sql="select san_pham.ten_san_pham, chi_tiet_hoa_don.hinh_san_pham, chi_tiet_hoa_don.don_gia, chi_tiet_hoa_don.so_luong";
        $sql.=" from san_pham join chi_tiet_hoa_don on san_pham.ma_san_pham=chi_tiet_hoa_don.ma_san_pham";
        $sql.=" where ma_hoa_don=".$ma_hoa_don;
        $detail_hd_fl_kh=pdo_query($sql);
        return $detail_hd_fl_kh;
    }
    //Xác nhận đặt hàng thêm hóa đơn 
    function insert_hoadon ($ma_khach_hang,$ten_khach_hang,$dia_chi,$sdt,$pttt,$tong_tien,$ngay_dat_hang){
        $sql = "insert into hoa_don (ma_khach_hang,ten_khach_hang,dia_chi,sdt,phuong_thuc_thanh_toan,tong_tien,ngay_dat_hang)";
        $sql.= " values ('$ma_khach_hang','$ten_khach_hang','$dia_chi','$sdt','$pttt',$tong_tien,'$ngay_dat_hang')";
        pdo_execute($sql);
    }
    function insert_ct_hoa_don ($ma_hoa_don,$ma_san_pham,$so_luong,$don_gia,$hinh_san_pham){
        $sql = " insert into chi_tiet_hoa_don (ma_hoa_don, ma_san_pham, so_luong, don_gia, hinh_san_pham)";
        $sql.= " values ('$ma_hoa_don', '$ma_san_pham', '$so_luong', '$don_gia', '$hinh_san_pham')";
        pdo_execute($sql);
    }
    //Lấy mã hóa đơn mới nhất vừa thêm 
    function load_new_hoa_don (){
        $sql = "select MAX(ma_hoa_don) from hoa_don";
        $ma_hoa_don_new=pdo_query_value($sql);
        return $ma_hoa_don_new;
    }
    //Tính tổng doanh thu
    function tong_doanh_thu (){
        $sql = "select sum(tong_tien) as tong_doanh_thu from hoa_don";
        $tong_doanh_thu = pdo_query_value($sql);
        return $tong_doanh_thu;
    }
    //Tình trung bình doanh thu trên 1 đơn hàng
    function tinh_tb_doanh_thu(){
        $sql = "select avg(tong_tien) as trung_binh from hoa_don";
        $trung_binh_dt = pdo_query_value($sql);
        return $trung_binh_dt;
    }
?>