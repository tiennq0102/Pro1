<div class="boxright">
            <div class="linkpage">
                <i class="fas fa-home fa-2x" style="color: white"></i>
                <span> > Quản lý bài viết</span>
            </div>
            <div class="boxtitle">
                <p>Thêm mới bài viết</p>
            </div>
                
            <form action="index.php?act=addbv" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tiêu đề</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tieude">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="hinhbv">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nội dung bài viết</label>
                  <textarea name="noidungbv" cols="95" rows="5"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
                    <button type="reset" class="btn btn-primary">Nhập lại</button>
                    <a href="index.php?act=listbv"><button type="button" class="btn btn-primary">Danh sách</button></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
</body>
</html>