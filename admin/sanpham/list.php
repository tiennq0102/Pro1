<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý sản phẩm</span>
            </div>
            <div class="boxtitle">
                <p>List sản phẩm</p>
            </div>
            <div class="search_sanpham">
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="keyword" class="form-control" placeholder="Tên sản phẩm">
                    <select name="tenloaihang" class="form-control">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach($listloaihang as $loaihang){
                                extract($loaihang);
                                echo '<option value="'.$ma_loai_hang.'">'.$ten_loai_hang.'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="Tìm Kiếm" class="btn btn-primary btn-sm fr">
                </form>
            </div>
            <div class="button" style="margin-left: auto;">
                <input class="btn btn-primary" type="button" name="click_all" value="Chọn tất cả">
                <input class="btn btn-primary" type="button" name="unclick_all" value="Bỏ chọn tất cả">
                <input class="btn btn-primary" type="button" name="del_all_click" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input class="btn btn-primary" type="button" name="add" value="Nhập thêm"></a>
            </div>
            <div class="QLSP">
                <table>
                <tr>
                    <th></th>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Action</th>
                </tr>
                <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$ma_san_pham;
                        $xoasp = "index.php?act=xoasp&id=".$ma_san_pham;
                        $hinhpath = "../upload/".$hinh_san_pham;
                        $format_tien = number_format($don_gia,0,'', '.');
                        if(is_file($hinhpath)){
                            $hinh = "<img src='".$hinhpath."'>";
                        }else{
                            $hinh = "no image";
                        }
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$ma_san_pham.'</td>
                                <td>'.$ten_san_pham.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$format_tien.'đ</td>
                                <td>'.$luot_xem.'</td>
                                <td>
                                    <a href="'.$suasp.'"><input type="button" class="btn btn-primary btn-sm" value="Sửa"></a>
                                    <a onclick="return delConfirm(\'' . $ma_san_pham . '\')" href="'.$xoasp.'"><input type="button" class="btn btn-primary btn-sm" value="Xóa"></a>
                                </td>
                            </tr>';
                            }
                ?>
            </table>
            </div>
           
            
        </div>
        <script>
    function delConfirm(new_name) {
        return confirm("Bạn có muốn xóa sản phẩm mã " + new_name + " ?")
    }
    </script>
</body>
</html>