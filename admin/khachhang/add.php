<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý khách hàng</span>
            </div>
            <div class="boxtitle">
                <p>Thêm mới Khách hàng</p>
            </div>
            <form action="" method="post">
                <!-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" disabled name="maloai">
                </div> -->
                <!-- Tên khách hàng -->
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Tên khách hàng</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="fullname">
                </div>
                <!-- Mật khẩu -->
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="matkhau">
                </div>
                <!-- Email -->
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                </div>
                <!-- Số điện thoại -->
                <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="sdt">
                </div> -->
                <!-- Địa chỉ -->
                <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="dia_chi">
                </div> -->
                <!-- Vai trò -->
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Vai trò</label>
                  <select name="vai_tro" id="">
                      <option value="0">Khách hàng</option>
                      <option value="1">Admin</option>
                  </select>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=listkh"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
</body>
</html>