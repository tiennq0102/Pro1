<main>
    <div class="text-link">
        <div class="text-link1 mb20">
            <p>Trang chủ > <span>Tài khoản</span></p>
        </div>
    </div>
    <div class="tttk">
        <div class="tttk-left">
            <div class="tttk-left_box1">
                <div class="icon-tttk">
                    <svg width="100" height="100">
                        <circle cx="50" cy="50" r="30" fill="#1F3164" />
                    </svg>
                    <i class="far fa-user fa-2x" style="color: white;"></i>
                    <!-- <i class="far fa-user-circle fa-2x" style="color: white;"></i> -->
                </div>
                <div class="text-tttk">
                    <p>Tài khoản của</p>
                    <h4><?=$_SESSION['user']['ten_khach_hang']?></h4>
                </div>
            </div>
            <div class="tttk-left_box2">
                <div class="tttk-left_box2__row">
                    <i class="far fa-user fa-lg" style="color: black;"></i>
                    <h6><a href="index.php?act=tttk">Thông tin tài khoản</a></h6>
                </div>
                <div class="tttk-left_box2__row">
                    <i class="fas fa-book fa-lg" style="color: black;"></i>
                    <h6><a href="index.php?act=dhct&id=<?=$_SESSION['user']['ma_khach_hang']?>">Đơn hàng của tôi</a></h6>
                </div>
                <div class="tttk-left_box2__row">
                    <i class="fas fa-map-marker-alt fa-lg" style="color: black;"></i>
                    <h6><a href="#">Địa chỉ</a></h6>
                </div>
                <div class="tttk-left_box2__row">
                    <i class="far fa-heart fa-lg" style="color: black;"></i>
                    <h6><a href="#">Sản phẩm yêu thích</a></h6>
                </div>
                <?php
                    if(isset($_SESSION['user'])){
                        if($_SESSION['user']['vai_tro']==1){
                            echo '
                            <div class="tttk-left_box2__row">
                                <i class="fas fa-user-cog" style="color: black;"></i>
                                <h6><a href="admin/index.php">Admin</a></h6>
                            </div> 
                            ';
                        }
                    }
                ?>
                <div class="tttk-left_box2__row">
                    <i class="fas fa-power-off" style="color: black;"></i>
                    <h6><a href="index.php?act=thoat">Đăng xuất</a></h6>
                </div>
            </div>
        </div>
        <div class="tttk-right mb20">
            <h2>Thông tin tài khoản</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ tên</label>
                    <input disabled type="text" class="form-control" id="exampleInputEmail1" value="<?php if(isset($_SESSION['user'])&& (is_array($_SESSION['user'])))echo $_SESSION['user']['ten_khach_hang']?>" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input disabled type="number" class="form-control" id="exampleInputPassword1" value="<?php if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))) echo $_SESSION['user']['sdt']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input  disabled type="email" class="form-control" id="exampleInputEmail1" value="<?php if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))) echo $_SESSION['user']['email']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input disabled type="text" class="form-control" id="exampleInputPassword1" value="<?php if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) echo $_SESSION['user']['dia_chi']?>">
                </div>
                <div class="tttk-button_update mb20">
                    <?php
                    if(isset($_SESSION['user'])){
                        $suattkh="index.php?act=sua-ttkh";

                        echo '<a href="'.$suattkh.'"><input class="btn btn-primary" type="button" name="" value="Cập nhật thông tin"></a>';
                    }else{
                        echo '<a href="index2.php?act=dangnhap"><input class="btn btn-primary" type="button" name="" value="Đăng nhập"></a>';
                    }
                        
                    ?>

                </div>
            </form>
        </div>

    </div>
</main>