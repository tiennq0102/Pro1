<?php
// var_dump($_SESSION['tong_tien']);
// var_dump($_SESSION['cart']);
// var_dump($_SESSION['user']);
$cart = ($_SESSION['cart']);
$phi_van_chuyen = 30000;
$tong_tien_confirm = $_SESSION['tong_tien'] + $phi_van_chuyen;
?>

<main>
    <div class="text-link mb20">
        <div class="text-link1 mb20">
            <p>Trang chủ > Giỏ hàng của bạn ><span> Đặt hàng</span></p>
        </div>
        <div class="text-link_title">
            <h2>Thông tin đặt hàng</h2>
        </div>
    </div>
    <div class="gc-content">
        <div class="gc-content-left">
            <h4 class="title-small">Thông tin nhận hàng</h4>
            <form class="mb20" method="POST" action="">
                <input type="hidden" name="ma_khach_hang" value="<?php echo $_SESSION['user']['ma_khach_hang'] ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ tên người nhận</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['user']['ten_khach_hang'] ?>" name="ten_khach_hang">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control" value="<?php echo $_SESSION['user']['sdt'] ?>" name="sdt">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['user']['dia_chi']?>" name="dia_chi">
                </div>
                <div class="pttt mb20">
                    <h4 class="title-small">Hình thức thanh toán</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phuong_thuc_tt" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            <p>Thanh toán tiền mặt khi nhận hàng (tiền mặt, quẹt thẻ ATM, Visa, Master)</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phuong_thuc_tt" id="flexRadioDefault2" value="2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <p>Thanh toán qua chuyển khoản qua tài khoản ngân hàng (khuyên dùng)</p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="phuong_thuc_tt" id="flexRadioDefault2" value="3">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <p>Thanh toán trực tuyến (Bằng thẻ ATM/Visa/Master qua cổng VnPay)</p>
                        </label>
                    </div>
                </div>
                <div class="pttt mb20 ">
                    <input type="submit" name="submit-hoa_don" class="form-control cart-content-right_bot btn-primary" id="exampleInputPassword1" value="Xác nhận đặt hàng">
                </div>
            </form>
            <div class="thongbao">
                     <?php if(isset($thong_bao_loi)){ echo $thong_bao_loi;}?>
            </div>

        </div>
        <div class="gc-content-right">
            <div class="gc-right-top mb20">
                <div class="gc-right-top1 mb10">
                    <h4>Thông tin đơn hàng</h4>
                    <p><a href=""></a></p>
                </div>
                <?php
                foreach ($cart as $item) {
                    $img = $img_path . $item['hinh_sp'];
                    echo '
                            <div class="gc-right-top2">
                                <img src="' . $img . '" alt="">
                                <div class="gc-right-top2_text">
                                    <p>' . $item['ten_sp'] . '</p>
                                    <p>Số lượng: ' . $item['so_luong'] . '</p>
                                    <h5>' . number_format($item['don_gia'], 0, '', '.') . 'đ</h5>
                                </div>
                            </div>
                            ';
                }
                ?>
            </div>
            <div class="gc-right-mid">
                <div class="gc-right-mid1">
                    <h6>Tạm tính</h6>
                    <h6><?php echo number_format($_SESSION['tong_tien'], 0, '', '.') ?>đ</h6>
                </div>
                <div class="gc-right-mid1 mb10">
                    <h6>Phí vận chuyển</h6>
                    <h6><?php echo number_format($phi_van_chuyen, 0, '', '.') ?>đ</h6>
                </div>
                <div class="gc-right-mid1">
                    <h6>Tổng tiền</h6>
                    <h5 class="txt_bold"><?php echo number_format($tong_tien_confirm, 0, '', '.') ?>đ</h5>
                </div>
            </div>
        </div>

    </div>
</main>