<div class="boxright">
    <div class="linkpage">
        <i class="fas fa-home fa-2x" style="color: white"></i>
        <span> > Quản lý bình luận</span>
    </div>
    <div class="boxtitle">
        <p>Quản lý bình luận</p>
    </div>
    <table>
        <tr>
            <th></th>
            <th>Mã BL</th>
            <th>Mã KH</th>
            <th>Mã SP</th>
            <th>Mã BV</th>
            <th>Tên KH</th>
            <th>Nội dung bình luận</th>
            <th>Thời gian</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($list_binhluan as $binhluan) {
            extract($binhluan);
            $xoabinhluan = "index.php?act=xoabl&id=" . $ma_binh_luan;
            echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>' . $ma_binh_luan . '</td>
                                <td>' . $ma_khach_hang . '</td>
                                <td>' . $ma_san_pham . '</td>
                                <td>' . $ma_bai_viet . '</td>
                                <td>' . $ten_khach_hang . '</td>
                                <td>' . $noi_dung_bl . '</td>
                                <td>' . $thoi_gian . '</td>
                                <td>
                                    <a onclick="return delConfirm(\'' . $ma_binh_luan . '\')" href="' . $xoabinhluan . '"><input type="button" class="btn btn-primary btn-sm" value="Xóa"></a>
                                </td>
                            </tr>';
        }


        ?>
    </table>
    <div class="button" style="margin-left: auto;">
        <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
        <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
        <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
    </div>
</div>
<!-- XÁC NHẬN XÓA BÌNH LUẬN -->
<script>
    function delConfirm(new_name) {
        return confirm("Bạn có muốn xóa bình luận mã " + new_name + " ?")
    }
</script>

</body>

</html>