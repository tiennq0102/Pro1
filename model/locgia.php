<?php
    function loadAll_gialoc(){
        $sql = "select * from gia_loc order by id ASC";
        $listlocgia = pdo_query($sql);
        return $listlocgia;
    }
?>