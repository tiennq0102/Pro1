<?php
// echo '<pre>';
$cart = array();
// $cart = $_SESSION;
// var_dump($cart);
// var_dump ($_SESSION['cart']);
?>


<main>
    <div class="text-link mb20">
        <div class="text-link1 mb20">
            <p>Trang chủ > <span>Giỏ hàng của bạn</span></p>
        </div>
        <div class="text-link_title">
            <h2>Giỏ hàng</h2>
        </div>
    </div>
    <div class="cart-content">
        <div class="cart-content-left">
            <table>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Tất cả</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th><a href="index.php?act=delcart"><i class="far fa-trash-alt"></i></a></th>
                </tr>
                <tr>
                    <!-- <th>mid</th> -->
                </tr>
                <?php
                    $tong_sl_sp = 0;
                    $tong_tien = 0;
                    if(isset($_SESSION['cart'])){
                        $cart = $_SESSION;

                    foreach ($cart['cart'] as $item) {
                        $img = $img_path . $item['hinh_sp'];
                        $thanh_tien = (int)$item['don_gia'] * (int)$item['so_luong'];
                        echo '
    
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><img src="' . $img . '" alt=""><p class="ten_sp_cart">' . $item['ten_sp'] . ' </p></td>
                                        <td><h6>' . number_format($item['don_gia'], 0, '', '.') . 'đ</h6></td>
                                        <td><p>' . $item['so_luong'] . '</p></td>
                                        <td class="txt_bold">' . number_format($thanh_tien, 0, '', '.') . 'đ</td>
                                        <td><a href="index.php?act=del1item&id='.$item['id'].'"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                ';
                        $tong_tien += $thanh_tien;
                        $tong_sl_sp += $item['so_luong'];
                    }
                    // echo '<pre>';
                    // var_dump($cart);
                    // var_dump($cart['cart']);

                }else
                    {
                        echo '
                        <tr>
                            <td colspan=6><h2>Giỏ hàng rỗng</h2></td>
                        </tr>
                        ';
                    }
                ?>
            </table>
        </div>
        <div class="cart-content-right">
            <div class="cart-content-right_top">
            <h6>Giao tới:</h6>
                <?php 
                    if(isset($_SESSION['user'])){
                        echo '
                            <h3>'.$_SESSION['user']['ten_khach_hang'].'</h3>
                        ';
                    }
                    else {
                        echo '
                            <h3></h3>
                        ';
                    }
                
                ?>

            </div>
            <div class="cart-content-right_mid">
                <div class="cart-content-right_mid__1">
                    <p>Số lượng sản phẩm</p>
                    <p><?php echo $tong_sl_sp ?></p>
                </div>
                <div class="cart-content-right_mid__1">
                    <p>Tổng tiền: </p>
                    <h6 class="txt_bold"><?php echo number_format($tong_tien, 0, '', '.') ?> đ</h6>
                </div>
            </div>
            
            <div class="cart-content-right_bot">
            <?php 

                    if (isset($_SESSION['user']) && isset($_SESSION['cart'])==false){
                        echo '
                            <a class="btn btn-primary btn-send-cart" href="index.php">Giỏ hàng rỗng</a>
                        ';
                    }
                    else if (isset($_SESSION['user']) && empty($_SESSION['cart'])){
                        echo '
                        <a class="btn btn-primary btn-send-cart" href="index.php">Giỏ hàng rỗng</a>
                        ';
                    }
                    else if(isset($_SESSION['user'])&& isset($_SESSION['cart'])){
                        echo '
                            <a class="btn btn-primary btn-send-cart" href="index.php?act=sendcart">Tiến hành đặt hàng</a>
                        ';
                    }
                    else {
                        echo '
                            <a class="btn btn-primary btn-send-cart" href="index2.php?act=dangnhap">Đăng nhập để đặt hàng</a>
                        ';
                    }
                    $_SESSION['tong_tien'] = $tong_tien;
                
                ?>
                 
            </div>
        </div>
    </div>
</main>
<?php

// echo $thanh_tien;

?>