<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý loại hàng</span>
            </div>
            <div class="boxtitle">
                <p>Thêm mới loại hàng</p>
            </div>
            <form action="index.php?act=adddm" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" disabled name="maloai">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tenloai">
                </div>
                <div class="button">
                    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
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