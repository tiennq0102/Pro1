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
            <h2>Chi tiết đơn hàng mã <?php echo $_GET['id']?></h2>
            <table class="tttk-bang-don-hang">
                <!-- TABLE HEAD -->
                <thead>
                    <tr>
                        <th class="th-bang-don-hang">STT</th>
                        <th class="th-bang-don-hang">Tên SP</th>
                        <th class="th-bang-don-hang">Hình ảnh</th>
                        <th class="th-bang-don-hang">Số lượng</th>
                        <th class="th-bang-don-hang">Đơn giá</th>
                        <th class="th-bang-don-hang bang-dh-tong-tien">Thành tiền</th>
                    </tr>
                </thead>
                <!-- TABLE BODY -->
                <tbody>
                    <?php
                        // var_dump($detail_dh_fl_kh);
                        $i=1;
                        $tong_tien_hoa_don=0;
                        foreach ($list_detail_dh_fl_kh as $item){
                            $hinhsp = $img_path . $item['hinh_san_pham'];
                            echo '
                            <tr>
                                <!-- SỐ THỨ TỰ -->
                                <td class="td-bang-don-hang">'.$i++.'</td>
                                <!-- TÊN SẢN PHẨM -->
                                <td class="th-bang-don-hang">'.$item['ten_san_pham'].'</td>
                                <!-- HÌNH ẢNH -->
                                <td class="th-bang-don-hang ct-dh-anh-sp"><img src="'.$hinhsp.'" alt=""></td>
                                <!-- SỐ LƯỢNG -->
                                <td class="th-bang-don-hang">'.$item['so_luong'].'</td>
                                <!-- ĐƠN GIÁ -->
                                <td class="th-bang-don-hang">'.number_format($item['don_gia'], 0, '', '.').'đ</td>
                                <!-- THÀNH TIỀN -->
                                <td class="th-bang-don-hang bang-dh-tong-tien">'.number_format($item['so_luong']*$item['don_gia'], 0, '', '.').'đ</td>
                                ';
                                $tong_tien_hoa_don+=($item['so_luong']*$item['don_gia']);
                        }
                    ?> 
                </tbody>
                <tfoot>
                    <tr class="chi-tiet-dh-tong-tien">
                        <td colspan="6">Tổng tiền: <?php echo number_format($tong_tien_hoa_don, 0, '', '.')?>đ</td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</main>