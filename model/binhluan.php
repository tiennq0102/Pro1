<?php
    function insert_binhluan($noidung,$tenkh,$idbv,$ngaybinhluan){
        $sql = "insert into binh_luan(noi_dung_bl,ten_khach_hang,ma_bai_viet,thoi_gian) values('$noidung','$tenkh','$idbv','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idbv){
        //hiển thị all bình luận thì $idpro là số 0
        $sql = "select*from binh_luan where 1";
        if($idbv>0) $sql.= " AND ma_bai_viet='".$idbv."'";
            $sql.= " order by ma_binh_luan desc";
            $listbl=pdo_query($sql);
            // echo $sql;
            // die();
        return $listbl;
    }


/////////////////////////////////

//2. List bình luận
function loadall_binhluan_admin(){
    // $sql = "select ma_binh_luan, binh_luan.ma_khach_hang, ma_san_pham, ma_bai_viet, khach_hang.ten_khach_hang, noi_dung_bl, thoi_gian";
    // $sql .=" from binh_luan join khach_hang on binh_luan.ma_khach_hang = khach_hang.ma_khach_hang";
    $sql = "select * from binh_luan";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}
//3. Xóa bình luận
function delete_binhluan($ma_binh_luan){
    $sql = "delete from binh_luan where ma_binh_luan=".$ma_binh_luan;
    pdo_execute($sql);
}    function loadall_binhluansp($idsp){
    //hiển thị all bình luận thì $idpro là số 0
    $sql = "select*from binh_luan where 1";
    if($idsp>0) $sql.= " AND ma_san_pham='".$idsp."'";
        $sql.= " order by ma_san_pham desc";
        $listbl=pdo_query($sql);
        // echo $sql;
        // die();
    return $listbl;
}
function insert_binhluansp($noidung,$tenkh,$idsp,$ngaybinhluan){
    $sql = "insert into binh_luan(noi_dung_bl,ten_khach_hang,ma_san_pham,thoi_gian) values('$noidung','$tenkh','$idsp','$ngaybinhluan')";
    pdo_execute($sql);
}
?>