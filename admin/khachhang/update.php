<?php
    if(is_array($khachhang)){
        extract($khachhang);   
    }
?>
<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý khách hàng</span>
            </div>
            <div class="boxtitle">
                <p>Cập nhật khách hàng</p>
            </div>
            <form action="index.php?act=updatekh_admin" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Mã khách hàng</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="ma_khach_hang" value="<?=$khachhang['ma_khach_hang']?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Tên khách hàng</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="ten_khach_hang" value="<?=$khachhang['ten_khach_hang']?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="<?=$khachhang['email']?>">
                </div>
                <div>
                    <select name="vai_tro" id="" >
                        <option value="0">Khách hàng</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $khachhang['ma_khach_hang'];?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <a href="index.php?act=listkh"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
            </form>
        </div>
</body>
</html>