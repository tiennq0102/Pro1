<?php
    if(is_array($danhmuc)){
        extract($danhmuc);
    }
?>
<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý loại hàng</span>
            </div>
            <div class="boxtitle">
                <p>Cập nhật loại hàng</p>
            </div>
            <form action="index.php?act=updatedm" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" disabled name="maloai">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tenloai" value="<?php if(isset($ten_loai_hang)&&($ten_loai_hang!="")) echo $ten_loai_hang;?>">
                </div>
                <div>
                    <input type="hidden" name="maloai" value="<?php if(isset($ma_loai_hang)&&($ma_loai_hang>0)) echo $ma_loai_hang;?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=listdm"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
</body>
</html>