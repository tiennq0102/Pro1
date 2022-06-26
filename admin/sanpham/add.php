<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý sản phẩm</span>
            </div>
            <div class="boxtitle">
                <p>Thêm mới sản phẩm</p>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    Loại Hàng<br>
                    <select class="form-control" name="maloaihang">
                            <?php
                                foreach($listloaihang as $loaihang){
                                    extract($loaihang);
                                    echo '<option value="'.$ma_loai_hang.'">'.$ten_loai_hang.'</option>';
                                }
                            ?>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tensanpham">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="hinhsanpham">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Giá</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="gia">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                  <textarea name="mota" cols="95" rows="5"></textarea>
                </div>
                <div class="button">
                    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
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