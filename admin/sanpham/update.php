<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/".$hinh_san_pham;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height='50'>";
    }else{
        $hinh = "no image";
    }
?>
<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý sản phẩm</span>
            </div>
            <div class="boxtitle">
                <p>Cập nhật sản phẩm</p>
            </div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    Loại Hàng<br>
                    <select class="form-control" name="maloaihang">
                        <option value="0" selected>Tất cả loại</option>
                            <?php
                                foreach($listloaihang as $loaihang){
                                    if($ma_loai_hang==$loaihang['ma_loai_hang']) echo '<option value="'.$loaihang['ma_loai_hang'].'"selected>'.$loaihang['ten_loai_hang'].'</option>';
                                    else echo '<option value="'.$loaihang['ma_loai_hang'].'">'.$loaihang['ten_loai_hang'].'</option>';
                                }
                            ?>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tensanpham" value="<?=$ten_san_pham?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="hinhsanpham"> <?=$hinh?>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Giá</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="gia" value="<?=$don_gia?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                  <textarea name="mota" cols="95" rows="5"><?=$mo_ta?>"</textarea>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?=$ma_san_pham?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=listsp"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
</form>
        </div>
</body>
</html>
