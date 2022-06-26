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
                    <h4><?= $_SESSION['user']['ten_khach_hang'] ?></h4>
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
            <h2>Đơn hàng của tôi</h2>
            <table class="tttk-bang-don-hang">
                <!-- TABLE HEAD -->
                <thead>
                    <tr>
                        <th class="th-bang-don-hang">Mã đơn hàng</th>
                        <th class="th-bang-don-hang">Số lượng SP</th>
                        <th class="th-bang-don-hang">Trạng thái</th>
                        <th class="th-bang-don-hang">Ngày đặt hàng</th>
                        <th class="th-bang-don-hang bang-dh-tong-tien">Tổng tiền</th>
                        <th class="th-bang-don-hang"></th>
                    </tr>
                </thead>
                <!-- TABLE BODY -->
                <tbody>
                    <?php 
                    // var_dump($list_dh_fl_kh);
                    // var_dump($_SESSION['user']);
                    foreach ($list_dh_fl_kh as $dhct){
                        $tt=get_ttdh($dhct['trang_thai']);
                        echo '<tr>
                            <!-- MÃ ĐƠN HÀNG -->
                            <td class="td-bang-don-hang">'.$dhct['ma_hoa_don'].'</td>
                            <!-- SỐ LƯỢNG SẢN PHẨM -->
                            <td class="th-bang-don-hang">'.$dhct['slsp'].'</td>
                            <!-- TRẠNG THÁI -->
                            <td class="th-bang-don-hang">'.$tt.'</td>
                            <!-- NGÀY ĐẶT HÀNG -->
                            <td class="th-bang-don-hang">'.$dhct['ngay_dat_hang'].'</td>
                            <!-- TỔNG TIỀN -->
                            <td class="th-bang-don-hang bang-dh-tong-tien">'.number_format($dhct['tong_tien'], 0, '', '.').'đ</td>
                            <!-- BUTTON XEM -->
                            <td class="th-bang-don-hang "><button class="bang-dh-xem-ct"><a href="index.php?act=ctdh&id='.$dhct['ma_hoa_don'].'">Xem</a></button></td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</main>