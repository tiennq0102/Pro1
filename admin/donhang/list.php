<div class="boxright">
    <div class="linkpage">
        <i class="fas fa-home fa-2x" style="color: white"></i>
        <span> > Quản lý đơn hàng</span>
    </div>
    <div class="boxtitle">
        <p>Quản lý đơn hàng</p>
    </div>
    <table>
        <tr>
            <th></th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Số lượng SP</th>
            <th>Tổng tiền</th>
            <th>Ngày xuất</th>
            <th>Trạng thái</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($listhoadon as $hoadon) {
            extract($hoadon);
            $suadh = "index.php?act=suadh&id=" . $ma_hoa_don;
            $xoadh = "index.php?act=xoadh&id=" . $ma_hoa_don;
            $tt = get_ttdh($trang_thai);
            echo '<tr>
                                    <td><input type="checkbox"></td>
                                    <td>' . $ma_hoa_don . '</td>
                                    <td>' . $ten_khach_hang . '</td>
                                    <td>' . $so_luong . '</td>
                                    <td>' . number_format($tong_tien, 0, '', '.') . 'đ</td>
                                    <td>' . $ngay_dat_hang . '</td>                                   
                                    <td>' . $tt . '</td>
                                    <td>
                                        <a href="' . $suadh . '" class="btn btn-primary btn-sm">Sửa</a>
                                        <a onclick="return delConfirm(\'' . $ma_hoa_don . '\')" href="' . $xoadh . '" class="btn btn-primary btn-sm">Xóa</a>
                                    </td>
                                </tr>';
        }
        ?>
        <!-- <tr>
                    <td><input type="checkbox"></td>
                    <td>01</td>
                    <td>Quyết Tiến</td>
                    <td>5</td>
                    <td>20.000.000</td>
                    <td>21/11/2021</td>
                    <td>Đơn hàng mới</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Sửa</a>
                        <a href="" class="btn btn-primary btn-sm">Xóa</a>
                    </td>
                </tr> -->
    </table>
    <div class="button" style="margin-left: auto">
        <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
        <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
        <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
    </div>
</div>
<script>
    function delConfirm(new_name) {
        return confirm("Bạn có muốn xóa đơn hàng mã " + new_name + " ?")
    }
</script>
</body>

</html>