<?php
    function insert_loaihang($tenloai){
        $sql = "insert into loai_hang(ten_loai_hang) values ('$tenloai')";
        pdo_execute($sql) ;
    }
    function loadAll_loaihang(){
        $sql = "select * from loai_hang order by ma_loai_hang desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function delete_loaihang($ma_loai_hang){
        $sql = "delete from loai_hang where ma_loai_hang=".$ma_loai_hang;
        pdo_execute($sql) ;
    }
    function loadOne_loaihang($id){
        $sql = "select * from loai_hang where ma_loai_hang=".$id;
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }
    
    function update_loaihang($ten_loai_hang,$ma_loai_hang){
        $sql = "update loai_hang set ten_loai_hang ='".$ten_loai_hang."' where ma_loai_hang=".$ma_loai_hang;
        pdo_execute($sql);
    }
?>