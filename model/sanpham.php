<?php
    function insert_sanpham($tensp,$gia,$hinh,$mota,$maloaihang){
        $sql = "insert into san_pham(ten_san_pham,don_gia,hinh_san_pham,mo_ta,ma_loai_hang) values ('$tensp','$gia','$hinh','$mota','$maloaihang')";
        pdo_execute($sql) ;
    }

    function loadAll_sanpham($kyw="",$iddm=0){
        $sql = "select * from san_pham where 1";
        if ($kyw!="") {
            $sql.=" and ten_san_pham like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and ma_loai_hang = '".$iddm."'";
        }
        $sql.=" order by ma_san_pham desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadOne_sanpham($id){
        $sql = "select * from san_pham where ma_san_pham=".$id;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
    function delete_sanphamCT($id){
        $sql = "delete from chi_tiet_hoa_don where ma_san_pham=".$id;
        pdo_execute($sql) ;
    }
    function delete_sanpham($id){
        $sql = "delete from san_pham where ma_san_pham=".$id;
        pdo_execute($sql) ;
    }
    function update_sanpham($masp,$maloai,$tensp,$price,$mota,$hinh){
        if($hinh!=""){
            $sql = "update san_pham set ma_loai_hang ='".$maloai."', ten_san_pham ='".$tensp."', don_gia ='".$price."', mo_ta ='".$mota."', hinh_san_pham ='".$hinh."' where ma_san_pham=".$masp;
        }else{
            $sql = "update san_pham set ma_loai_hang ='".$maloai."', ten_san_pham ='".$tensp."', don_gia ='".$price."', mo_ta ='".$mota."' where ma_san_pham=".$masp;
        }
        pdo_execute($sql);
        
    }
    function showsp_xemnhieu(){
        $sql="select*from san_pham order by luot_xem desc limit 0,1";
        $spxemtop1=pdo_query_one($sql);
        return $spxemtop1;
    }
    function showsp_moinhat(){
        $sql="select*from san_pham order by ma_san_pham desc limit 0,1";
        $spmoitop1=pdo_query_one($sql);
        return $spmoitop1;
    }
    function loadall_thongke(){
        $sql= "select loai_hang.ma_loai_hang as madm, loai_hang.ten_loai_hang as tendm, count(san_pham.ma_san_pham) as countsp, min(san_pham.don_gia) as minprice, max(san_pham.don_gia) as maxprice, avg(san_pham.don_gia) as avgprice";
        $sql.=" from san_pham left join loai_hang on loai_hang.ma_loai_hang=san_pham.ma_loai_hang";        
        $sql.=" group by loai_hang.ma_loai_hang order by loai_hang.ma_loai_hang desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }
    function loadAll_sanpham_theodm1($iddm){
        $sql="select*from san_pham where ma_loai_hang='".$iddm."' order by ma_san_pham desc ";
        $sptheodm1 =pdo_query($sql);
        return $sptheodm1;
    }
    function loadAll_sanpham_theodm2($iddm){
        $sql="select*from san_pham where ma_loai_hang='".$iddm."' order by ma_san_pham desc ";
        $sptheodm2 =pdo_query($sql);
        return $sptheodm2;
    }
    function loadAll_sanpham_theodm3($iddm){
        $sql="select*from san_pham where ma_loai_hang='".$iddm."' order by ma_san_pham desc ";
        $sptheodm3 =pdo_query($sql);
        return $sptheodm3;
    }
    function loadAll_sanpham_theodm4($iddm){
        $sql="select*from san_pham where ma_loai_hang='".$iddm."' order by ma_san_pham desc ";
        $sptheodm4 =pdo_query($sql);
        return $sptheodm4;
    }
    //lOAD SẢN PHẨM CÙNG LOẠI
    function load_sanpham_cungloai($iddm,$id){
        $sql = "select * from san_pham where ma_loai_hang=".$iddm." AND ma_san_pham <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    //LỌC GIÁ SẢN PHẨM
    function load_sanpham_gia($from,$to){
        $sql = "select * from san_pham where";
        if($to==0){
            $sql.=" don_gia>= ".$from;
        }
        else{
            $sql.=" don_gia > '".$from."' AND don_gia < '".$to."'";
        }
        $spgia =pdo_query($sql);
        return $spgia;
    }
?>