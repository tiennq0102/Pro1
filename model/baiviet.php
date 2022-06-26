<?php
    //backend
    function insert_baiviet($tieude,$noidung,$hinh,$ngaydang){
        $sql = "insert into bai_viet(tieu_de,noi_dung_bv,anh_bai_viet,ngay_dang) values ('$tieude','$noidung','$hinh','$ngaydang')";
        pdo_execute($sql) ;
    }
    function loadAll_baiviet(){
        $sql = "select*from bai_viet order by ma_bai_viet desc";
        $listbaiviet = pdo_query($sql);
        return $listbaiviet;
    }
    function delete_baiviet($ma_bai_viet){
        $sql = "delete from bai_viet where ma_bai_viet=".$ma_bai_viet;
        pdo_execute($sql) ;
    }
    function loadOne_baiviet($id){
        $sql = "select * from bai_viet where ma_bai_viet=".$id;
        $baiviet = pdo_query_one($sql);
        return $baiviet;
    }

    function update_baiviet($tieude,$noidung,$hinh,$mabaiviet){
        if($hinh!=""){
            $sql = "update bai_viet set tieu_de ='".$tieude."', noi_dung_bv ='".$noidung."', anh_bai_viet ='".$hinh."' where ma_bai_viet=".$mabaiviet; 
        }else{
            $sql = "update bai_viet set tieu_de ='".$tieude."', noi_dung_bv ='".$noidung."' where ma_bai_viet=".$mabaiviet;
        }
        
        pdo_execute($sql);
    }
    //frontend
    function loadAll_baiviet_new(){
        $sql = "select*from bai_viet order by ma_bai_viet desc limit 0,4";
        $listbaivietnew = pdo_query($sql);
        return $listbaivietnew;
    }
?>