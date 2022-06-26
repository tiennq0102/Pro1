<main>
    <div class="banner-news">
        <div class="slide">
            <div id="carouselExampleIndicators" class="carousel slide slide1 " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner border-rad-5">
                    <div class="carousel-item active">
                        <img src="./img/banner1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/banner2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/banner3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- <div id="carouselExampleIndicators" class="carouse slide1" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner  border-rad-5">
                    <div class="carousel-item active">
                        <img src="./img/banner1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/banner2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/banner3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </div>
        <!-- end banner -->
        <div class="news">
            <img src="html_css_project/image/new1.png" alt="" class="border-rad-5 img-fluid">
            <img src="html_css_project/image/new2.png" alt="" class="border-rad-5 img-fluid">
        </div>
        <!-- end new  -->
    </div>
    <!-- end banner-news -->
    <div class="show-product">
        <h2><i class="fas fa-laptop"></i> Laptop</h2>
        <div class="row row-product row-product-5">
            <?php
            foreach ($sptheodm1 as $sp1) {
                $linksp1 = "index.php?act=sanphamct&id=" . $sp1['ma_san_pham'];
                $format_tien1 = number_format($sp1['don_gia'], 0, '', '.');
                $hinhsp1 = $img_path . $sp1['hinh_san_pham'];
                echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="'.$linksp1.'">
                                        <img src="' . $hinhsp1 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- Tên sản phẩm -->
                                        <p><a href="'.$linksp1.'">' . $sp1['ten_san_pham'] . '</a></p>
                                        <!-- Tên sản phẩm -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Giá sản phẩm -->
                                        <div class="price-product"><span>' . $format_tien1 . 'đ</span></div>
                                        <!-- Giá sản phẩm -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> Còn hàng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Thêm vào giỏ hàng -->
                                    <button><a href="index.php?act=addtocart&id='.$sp1['ma_san_pham'].'"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a></button>
                                        <!-- Thêm vào giỏ hàng -->
                                </div>
                            </div>
                        ';
            }
            ?>
        </div>
    </div>
    <div class="show-product">
        <h2><i class="fas fa-desktop"></i> PC</h2>
        <div class="row row-product row-product-5">
            <?php
            foreach ($sptheodm2 as $sp2) {
                $linksp2 = "index.php?act=sanphamct&id=" . $sp2['ma_san_pham'];
                $format_tien2 = number_format($sp2['don_gia'], 0, '', '.');
                $hinhsp2 = $img_path . $sp2['hinh_san_pham'];
                echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="'.$linksp2.'">
                                        <img src="' . $hinhsp2 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- Tên sản phẩm -->
                                        <p><a href="'.$linksp2.'">' . $sp2['ten_san_pham'] . '</a></p>
                                        <!-- Tên sản phẩm -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Giá sản phẩm -->
                                        <div class="price-product"><span>' . $format_tien2 . 'đ</span></div>
                                        <!-- Giá sản phẩm -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> Còn hàng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Thêm vào giỏ hàng -->
                                    <button><a href="index.php?act=addtocart&id='.$sp2['ma_san_pham'].'"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a></button>
                                        <!-- Thêm vào giỏ hàng -->
                                </div>
                            </div>
                        ';
            }
            ?>
        </div>
    </div>
</main>