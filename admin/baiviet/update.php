<?php
if (is_array($baiviet)) {
    extract($baiviet);
}
$hinhpath = "../upload/".$anh_bai_viet;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='50'>";
} else {
    $hinh = "no image";
}
?>
<div class="boxright">
    <div class="linkpage">
        <i class="fas fa-home fa-2x" style="color: white"></i>
        <span> > Quản lý bài viết</span>
    </div>
    <div class="boxtitle">
        <p>Cập nhật bài viết</p>
    </div>
    <form action="index.php?act=updatebv" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="tieude" value="<?=$tieu_de?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="hinhbv" > <?=$hinh?>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nội dung bài viết</label>
            <textarea name="noidungbv" cols="95" rows="5"><?=$noi_dung_bv?></textarea>
        </div>
        <div>
        <input type="hidden" name="id" value="<?=$ma_bai_viet?>">
            <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?act=listbv"><button type="button" class="btn btn-primary">Danh sách</button></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>
</body>

</html>
