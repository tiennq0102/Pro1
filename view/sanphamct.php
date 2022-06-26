<main>
    <?php
        extract($onesp);
        // var_dump($onesp);
        $format_tien = number_format($don_gia,0,'', '.');
        $hinhsp=$img_path.$hinh_san_pham;
        ?>  
        
            <div class="bv-content">
                <div class="box-products-left">
                    <div class="content-product">
                        <div class="product-name">
                            <h2><?=$ten_san_pham?></h2>
                        </div>
                        <div class="product-infor">
                            <div class="product-img">
                                <img src="<?=$hinhsp?>" alt="">
                            </div>
                            <div class="product-detail">
                                <div class="product-meta">
                                    <div class="product_detail-sku">
                                        Mã SP:
                                        <span class="sku">POLY<?=$ma_san_pham?></span>
                                    </div>
                                    <div class="product_detail-separator"></div>
                                    <div class="product_detail-view-counter">
                                        Lượt xem:
                                        <span class="counter-number"><?=$luot_xem?></span>
                                    </div>
                                </div>
                                <div class="product-summary-item">
                                    <h5>Thông tin sản phẩm</h5>
                                    <div class="product-summary-list">
                                        <?=$mo_ta?>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h2><?=$format_tien?>đ</h2>
                                </div>
                                <div class="add-cart">
                                     <a class="btn btn-primary" href="index.php?act=addtocart&id=<?=$ma_san_pham?>"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blsp">
                        <h4 class="mb20">Đăng bình luận về sản phẩm này</h4>
                        <?php
                            if(isset($_SESSION['user'])){
                                include "binhluan/binhluansp.php";
                            }
                            else{
                                echo '<h6 class="danger">Bạn cần đăng nhập để thực hiện bình luận</h4>';
                            }
                        ?>
                    </div>
                </div>
                <div class="box-products-right">
                    <div class="static-title">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#2ecc71">
                                    <path
                                        d="M10.32,27.52c-5.68406,0 -10.32,4.63594 -10.32,10.32v82.56c0,5.68406 4.63594,10.32 10.32,10.32h14.0825c1.63938,9.75563 10.11844,17.2 20.3175,17.2c10.19906,0 18.67813,-7.44437 20.3175,-17.2h31.9275c5.30781,0 9.675,-4.36719 9.675,-9.675v-83.205c0,-5.68406 -4.63594,-10.32 -10.32,-10.32zM113.52,44.72v86h0.3225c1.63938,9.75563 10.11844,17.2 20.3175,17.2c10.19906,0 18.67813,-7.44437 20.3175,-17.2h7.2025c5.30781,0 10.32,-5.01219 10.32,-10.32v-33.0025c0,-3.87 -1.47812,-7.4175 -2.795,-10.105c-1.31687,-2.6875 -2.6875,-4.6225 -2.6875,-4.6225v-0.1075l-7.955,-10.6425l-6.235,-8.2775v-0.1075c-0.65844,-0.83312 -1.49156,-1.70656 -2.4725,-2.6875c-2.52625,-2.62031 -5.68406,-5.16 -9.7825,-5.9125c-0.79281,-0.14781 -1.62594,-0.215 -2.4725,-0.215zM130.72,65.36h21.715l8.4925,11.2875l0.1075,0.1075c0.06719,0.09406 0.99438,1.41094 2.0425,3.5475c0.84656,1.73344 1.53188,3.89688 1.8275,5.6975h-34.185c-0.57781,0 -1.505,-0.43 -2.2575,-1.1825c-0.7525,-0.7525 -1.1825,-1.67969 -1.1825,-2.2575v-13.76c0,-1.69312 2.06938,-3.44 3.44,-3.44zM17.2,68.8h13.76v3.7625h-9.245v4.515h8.17v3.44h-8.17v8.2775h-4.515zM34.4,68.8h10.32c1.72,0 5.805,1.00781 5.805,5.4825c0,3.09063 -1.97531,4.48813 -3.01,4.8375c0.68531,0 2.6875,0.67188 2.6875,5.4825c0,0.34938 0.06719,2.75469 0.7525,3.44h-4.515c-0.34937,-0.68531 -0.3225,-1.34375 -0.3225,-2.0425c-0.34937,-3.09062 -0.34937,-5.4825 -3.44,-5.4825h-4.515v7.525h-3.7625zM55.04,68.8h14.405v3.7625h-10.32v4.1925h9.675v3.44h-9.675v4.73h10.75v3.87h-14.835zM74.605,68.8h14.5125v3.7625h-10.32v4.1925h9.5675v3.44h-9.5675v4.73h10.6425v3.87h-14.835zM38.485,72.24v5.4825h4.8375c1.03469,0 3.1175,0.06719 3.1175,-2.6875c0,-2.40531 -2.08281,-2.795 -3.1175,-2.795zM44.72,113.52c7.64594,0 13.76,6.11406 13.76,13.76c0,7.64594 -6.11406,13.76 -13.76,13.76c-7.64594,0 -13.76,-6.11406 -13.76,-13.76c0,-7.64594 6.11406,-13.76 13.76,-13.76zM134.16,113.52c7.64594,0 13.76,6.11406 13.76,13.76c0,7.64594 -6.11406,13.76 -13.76,13.76c-7.64594,0 -13.76,-6.11406 -13.76,-13.76c0,-7.64594 6.11406,-13.76 13.76,-13.76z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        Sản phẩm được miễn phí giao hàng
                    </div>

                    <div class="static-item">
                        <div class="title">Chính sách giao hàng</div>
                        <div class="static-nd">
                            <p><a href="">1. Cam kết hàng chính hãng 100%</a></p>
                            <p><a href="">2. Đổi trả trong vòng 10 ngày</a></p>
                            <!-- <ul>
                                <li>
                                    Giao hàng siêu tốc trong 2h
                                </li>
                                <li>
                                    Giao hàng miễn phí toàn quốc
                                </li>
                                <li>
                                    Nhận hàng và thanh toán tại nhà
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="static-item">
                        <div class="title">Dịch vụ khác</div>
                        <div class="static-nd">
                            <p><a href="">1. Sửa chữa đồng giá 150.000đ.</a></p>
                            <p><a href="">2. Vệ sinh máy tính, laptop.</a></p>
                            <p><a href="">3. Bảo hành tại nhà.</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-product">
                <!-- Danh mục  -->
                <h2>Sản phẩm cùng loại</h2>
                <!-- Danh mục  -->
                                            
                <div id="wapper">
                    <div class="row row-product filtering">
                        <?php
                            
                            foreach ($sp_cungloai as $sp) {
                                $linksp = "index.php?act=sanphamct&id=".$sp['ma_san_pham'];
                                $tien_cung_loai = number_format($sp['don_gia'],0,'', '.');
                                $hinhsp_cung_loai=$img_path.$sp['hinh_san_pham'];
                                echo '
                                    <div class="column-product">
                                    <div class="image-product"> 
                                        <a href="'.$linksp.'">
                                            <!-- Ảnh sản phẩm -->
                                            <img src="'.$hinhsp_cung_loai.'" class="image-fluid" alt="">
                                            <!-- Ảnh sản phẩm -->
                                        </a>
                                    </div>
                                    <div class="detail-product">
                                        <div class="name-product">
                                            <!-- Tên sản phẩm -->
                                            <p><a href="'.$linksp.'">'.$sp['ten_san_pham'].'</a></p>
                                            <!-- Tên sản phẩm -->
                                        </div>
                                        <div class="price-status-product">
                                            <!-- Giá sản phẩm -->
                                            <div class="price-product"><span>'.$tien_cung_loai.' đ</span></div>
                                            <!-- Giá sản phẩm -->
                                            <div class="status-product"><span><i class="fas fa-check"></i> Còn hàng</span></div>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                            <!-- Thêm vào giỏ hàng -->
                                        <button><a href="index.php?act=addtocart&id='.$sp['ma_san_pham'].'"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a></button>
                                            <!-- Thêm vào giỏ hàng -->
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                    
                    </div>
                </div>
            </div>
        </main>