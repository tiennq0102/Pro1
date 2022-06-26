<div class="boxright">
    <div class="linkpage">
        <i class="fas fa-home fa-2x" style="color: white"></i>
        <span> > Quản lý sản phẩm</span>
    </div>
    <div class="boxtitle">
        <p>List bài viết</p>
    </div>

    <div class="button" style="margin-left: auto;">
        <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
        <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
        <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
        <a href="index.php?act=addbv"><input class="btn btn-primary" type="button" name="add" value="Nhập thêm"></a>
    </div>
    <div class="QLBV">
        <table>
            <tr>
                <th></th>
                <th>Mã BV</th>
                <th>Tiêu đề</th>
                <th>Hình</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>Action</th>
            </tr>
            <?php
            // var_dump($listbv);
            foreach ($listbaiviet as $baiviet) {

                extract($baiviet);
                $suabv = "index.php?act=suabv&id=" . $ma_bai_viet;
                $xoabv = "index.php?act=xoabv&id=" . $ma_bai_viet;
                $hinhpath = "../upload/" . $anh_bai_viet;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "'>";
                    // $hinh = "<img src='".$hinhpath."' height='0.1%'>";
                } else {
                    $hinh = "no image";
                }
                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $ma_bai_viet . '</td>
                                <td>' . $tieu_de . '</td>
                                <td>' . $hinh . '</td>
                                <td><p>' . $noi_dung_bv . '</p></td>
                                <td>' . $ngay_dang . '</td>
                                <td>
                                    <a href="' . $suabv . '"><input type="button" class="btn btn-primary btn-sm" value="Sửa"></a>
                                    <a onclick="return delConfirm(\'' . $ma_bai_viet . '\')" href="' . $xoabv . '"><input type="button" class="btn btn-primary btn-sm" value="Xóa"></a>
                                </td>
                            </tr>';
            }
            ?>
        </table>
    </div>


</div>
<!-- XÁC NHẬN CÓ MUỐN XÓA HAY KHÔNG -->
<script>
    function delConfirm(new_name) {
        return confirm("Bạn có muốn xóa bài viết mã " + new_name + " ?")
    }
</script>
</body>

</html>