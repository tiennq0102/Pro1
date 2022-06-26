<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý loại hàng</span>
            </div>
            <div class="boxtitle">
                <p>Quản lý loại hàng</p>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Action</th>
                </tr>
                <?php
                
                    foreach($listloaihang as $loaihang){
                        extract($loaihang);
                        $suadm="index.php?act=suadm&id=".$ma_loai_hang;
                        $xoadm="index.php?act=xoadm&id=".$ma_loai_hang;
                        echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>'.$ma_loai_hang.'</td>
                                <td>'.$ten_loai_hang.'</td>
                                <td>
                                    <a href="'.$suadm.'" class="btn btn-primary btn-sm">Sửa</a>
                                    <a href="'.$xoadm.'" class="btn btn-primary btn-sm">Xóa</a>
                                </td>
                            </tr>';
                            }
                ?>
            </table>
            <div class="button" style="margin-left: auto;">
                <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
                <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
                <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input class="btn btn-primary" type="button" name="add" value="Nhập thêm"></a>
            </div>
        </div>
</body>
</html>