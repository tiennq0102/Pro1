<?php
    if(is_array($hoadon)){
        extract($hoadon);   
    }
?>
<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý loại hàng</span>
            </div>
            <div class="boxtitle">
                <p>Cập nhật hóa đơn</p>
            </div>
            <form action="index.php?act=updatedh" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Mã đơn hàng</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="id" value="<?=$hoadon['ma_hoa_don']?>" disabled>
                </div>
                <div>
                    <select name="trang_thai" id="" >
                        <option value="0">Đơn hàng mới</option>
                        <option value="1">Đang xử lý</option>
                        <option value="2">Đang giao hàng</option>
                        <option value="3">Hoàn tất</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?php echo $hoadon['ma_hoa_don'];?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <a href="index.php?act=listdonhang"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
            </form>
        </div>
</body>
</html>