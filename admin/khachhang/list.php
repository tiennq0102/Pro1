<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý khách hàng</span>
            </div>
            <div class="boxtitle">
                <p>Quản lý khách hàng</p>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th>Action</th>
                </tr>
                <?php
                    foreach($listkhachhang as $khachhang){
                        extract($khachhang);
                        $suakhachhang = "index.php?act=suakh&id=".$ma_khach_hang;
                        $xoakhachhang = "index.php?act=xoakh&id=".$ma_khach_hang;
                        $vaitro = get_vtkh($vai_tro);
                        echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>'.$ma_khach_hang.'</td>
                                <td>'.$ten_khach_hang.'</td>
                                <td>'.$mat_khau.'</td>
                                <td>'.$email.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$dia_chi.'</td>
                                <td>'.$vaitro.'</td>
                                <td>
                                    <a href="'.$suakhachhang.'"><input type="button" class="btn btn-primary btn-sm" value="Sửa"></a>
                                    <a onclick="return delConfirm(\'' . $ma_khach_hang . '\')" href="'.$xoakhachhang.'"><input type="button" class="btn btn-primary btn-sm" value="Xóa"></a>
                                </td>
                            </tr>';
                            }


                ?>
            </table>
            <div class="button" style="margin: auto;">
                <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
                <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
                <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
                <a href="index.php?act=addkh"><input class="btn btn-primary" type="button" name="add" value="Nhập thêm"></a>
            </div>
        </div>
        <script>
    function delConfirm(new_name) {
        return confirm("Bạn có muốn xóa tài khoản mã " + new_name + " ?")
    }
    </script>
</body>
</html>