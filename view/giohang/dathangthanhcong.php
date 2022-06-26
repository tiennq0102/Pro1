<?php
// echo '<pre>';
// var_dump($cart);
// foreach ($cart as $item){
//     echo $item['id'];
// }
// var_dump($last_hoa_don)
?>

<?php
// var_dump($_SESSION['tong_tien']);
// var_dump($_SESSION['cart']);
// var_dump($_SESSION['user']);
$cart = ($_SESSION['cart']);
$phi_van_chuyen = 30000;
$tong_tien_confirm = $_SESSION['tong_tien'] + $phi_van_chuyen;
$pttt;
switch ($phuong_thuc_tt) {
    case '1':
        $pttt = "Thanh toán tiền mặt khi nhận hàng (tiền mặt, quẹt thẻ ATM, Visa, Master)";
        break;
    case '2':
        $pttt = "Thanh toán qua chuyển khoản qua tài khoản ngân hàng (khuyên dùng)";
        break;
    case '3':
        $pttt = "Thanh toán trực tuyến (Bằng thẻ ATM/Visa/Master qua cổng VnPay)";
        break;
}
?>

<main>
    <div class="text-link mb20">
        <div class="text-link1 mb20">
            <p>Trang chủ > Giỏ hàng của bạn > Đặt hàng ><span> Hoàn tất</span></p>
        </div>
        <div class="text-link_title">
        </div>
    </div>
    <div class="gc-content">
        <div class="gc-content-left">
            <h4 class="title-small thank-you">Cảm ơn bạn đã mua hàng của chúng tôi</h4>

            <form class="mb20" method="POST" action="index.php?act=confirm_hd">
                <input type="hidden" name="ma_khach_hang" value="<?php echo $_SESSION['user']['ma_khach_hang'] ?>">
                <div class="mb-3">
                    <h4>Thông tin đơn hàng</h4>
                    <div class="">
                        <p>Mã đơn hàng: <?php echo $ma_hoa_don_new ?></p>
                        <p>Ngày dặt hàng: <?php echo $ngaydathang ?></p>
                        <p>Tổng giá trị đơn hàng: <?php echo number_format($tong_tien_confirm, 0, '', '.') ?>đ</p>
                        <p>Phương thức thanh toán: <?php echo $pttt ?></p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ tên người nhận</label>
                    <input type="text" class="form-control" value="<?php echo $ten_khach_hang ?>" name="ten_khach_hang" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control" value="<?php echo $sdt ?>" name="sdt" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" value="<?php echo $dia_chi ?>" name="dia_chi" disabled>

                </div>
                <div class="pttt mb20 text-center">
                    <a class="form-control cart-content-right_bot btn-primary" href="index.php?home.php">Quay lại trang chủ</a>
                </div>
            </form>


        </div>
        <div class="gc-content-right">
            <div class="gc-right-top mb20">
                <div class="gc-right-top1 mb10">
                    <h4>Thông tin đơn hàng</h4>
                    <p><a href="">Thay đổi</a></p>
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