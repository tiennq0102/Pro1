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
    <!-- l???c s???n ph???m theo gi?? -->

    <!-- l???c s???n ph???m theo gi?? -->
    <div class="filter-product">
        <div class="filter-product-text">
            <h2>L???c s???n ph???m theo gi??</h2>
        </div>
        <div class="filter-list">
            <?php
            foreach ($locgia as $gia_loc) {
                // echo $gia_loc['start'];
                echo '<div class="item_filters">
                            <a class="btn btn-primary" href="index.php?act=sanphamloc&gialoc=' . $gia_loc['gia_loc'] . '" >' . $gia_loc['gia_loc'] . '</a>
                        </div>';
            }
            // foreach ($load_sp_gia as $sp_loc) {
            //     var_dump($sp_loc);
            //     # code...
            // }
            // var_dump($load_sp_gia);
            ?>
        </div>
    </div>
    <div class="show-product">
        <h2><i class="fas fa-laptop"></i> Laptop</h2>
        <div id="wapper">
            <div class="row row-product filtering">
                <?php
                foreach ($sptheodm1 as $sp1) {
                    $linksp1 = "index.php?act=sanphamct&id=" . $sp1['ma_san_pham'];
                    $format_tien1 = number_format($sp1['don_gia'], 0, '', '.');
                    $hinhsp1 = $img_path . $sp1['hinh_san_pham'];
                    echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="' . $linksp1 . '">
                                        <img src="' . $hinhsp1 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- T??n s???n ph???m -->
                                        <p><a href="">' . $sp1['ten_san_pham'] . '</a></p>
                                        <!-- T??n s???n ph???m -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="price-product"><span>' . $format_tien1 . '??</span></div>
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> C??n h??ng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Th??m v??o gi??? h??ng -->
                                    <button><a href="index.php?act=addtocart&id=' . $sp1['ma_san_pham'] . '"><i class="fas fa-shopping-cart"></i> Th??m v??o gi??? h??ng</a></button>
                                        <!-- Th??m v??o gi??? h??ng -->
                                </div>
                            </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="show-product">
        <h2><i class="fas fa-desktop"></i> PC</h2>
        <div id="wapper">
            <div class="row row-product filtering">
                <?php
                foreach ($sptheodm2 as $sp2) {
                    $linksp2 = "index.php?act=sanphamct&id=" . $sp2['ma_san_pham'];
                    $format_tien2 = number_format($sp2['don_gia'], 0, '', '.');
                    $hinhsp2 = $img_path . $sp2['hinh_san_pham'];
                    echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="' . $linksp2 . '">
                                        <img src="' . $hinhsp2 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- T??n s???n ph???m -->
                                        <p><a href="">' . $sp2['ten_san_pham'] . '</a></p>
                                        <!-- T??n s???n ph???m -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="price-product"><span>' . $format_tien2 . '??</span></div>
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> C??n h??ng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Th??m v??o gi??? h??ng -->
                                    <button><a href="index.php?act=addtocart&id=' . $sp2['ma_san_pham'] . '"><i class="fas fa-shopping-cart"></i> Th??m v??o gi??? h??ng</a></button>
                                        <!-- Th??m v??o gi??? h??ng -->
                                </div>
                            </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="show-product">
        <h2><i class="fas fa-headphones-alt"></i> Ph??? ki???n m??y t??nh</h2>
        <div id="wapper">
            <div class="row row-product filtering">
                <?php
                foreach ($sptheodm3 as $sp3) {
                    $linksp3 = "index.php?act=sanphamct&id=" . $sp3['ma_san_pham'];
                    $format_tien3 = number_format($sp3['don_gia'], 0, '', '.');
                    $hinhsp3 = $img_path . $sp3['hinh_san_pham'];
                    echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="' . $linksp3 . '">
                                        <img src="' . $hinhsp3 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- T??n s???n ph???m -->
                                        <p><a href="">' . $sp3['ten_san_pham'] . '</a></p>
                                        <!-- T??n s???n ph???m -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="price-product"><span>' . $format_tien3 . '??</span></div>
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> C??n h??ng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Th??m v??o gi??? h??ng -->
                                    <button><a href="index.php?act=addtocart&id=' . $sp3['ma_san_pham'] . '"><i class="fas fa-shopping-cart"></i> Th??m v??o gi??? h??ng</a></button>
                                        <!-- Th??m v??o gi??? h??ng -->
                                </div>
                            </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="show-product">
        <h2><i class="fas fa-microchip"></i> Linh ki???n m??y t??nh</h2>
        <div id="wapper">
            <div class="row row-product filtering">
                <?php
                foreach ($sptheodm4 as $sp4) {
                    $linksp4 = "index.php?act=sanphamct&id=" . $sp4['ma_san_pham'];
                    $format_tien4 = number_format($sp4['don_gia'], 0, '', '.');
                    $hinhsp4 = $img_path . $sp4['hinh_san_pham'];
                    echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="' . $linksp4 . '">
                                        <img src="' . $hinhsp4 . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- T??n s???n ph???m -->
                                        <p><a href="">' . $sp4['ten_san_pham'] . '</a></p>
                                        <!-- T??n s???n ph???m -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="price-product"><span>' . $format_tien4 . '??</span></div>
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> C??n h??ng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Th??m v??o gi??? h??ng -->
                                    <button><a href="index.php?act=addtocart&id=' . $sp4['ma_san_pham'] . '"><i class="fas fa-shopping-cart"></i> Th??m v??o gi??? h??ng</a></button>
                                        <!-- Th??m v??o gi??? h??ng -->
                                </div>
                            </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
</main>