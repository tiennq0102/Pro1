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
        <h2><i class="fas fa-search"></i> K???t qu??? t??m ki???m: <?php echo $_POST['kyw'] ?></h2>
        <div class="row row-product row-product-5">
            <?php
            foreach ($dssp as $sp) {
                $linksp = "index.php?act=sanphamct&id=" . $sp['ma_san_pham'];
                $format_tien = number_format($sp['don_gia'], 0, '', '.');
                $hinhsp = $img_path . $sp['hinh_san_pham'];
                echo '
                            <div class="column-product">
                                <div class="image-product"> 
                                    <a href="'.$linksp.'">
                                        <img src="' . $hinhsp . '" class="image-fluid" alt="">
                                    </a>
                                </div>
                                <div class="detail-product">
                                    <div class="name-product">
                                        <!-- T??n s???n ph???m -->
                                        <p><a href="'.$linksp.'">' . $sp['ten_san_pham'] . '</a></p>
                                        <!-- T??n s???n ph???m -->
                                    </div>
                                    <div class="price-status-product">
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="price-product"><span>' . $format_tien . '??</span></div>
                                        <!-- Gi?? s???n ph???m -->
                                        <div class="status-product"><span><i class="fas fa-check"></i> C??n h??ng</span></div>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                        <!-- Th??m v??o gi??? h??ng -->
                                    <button><a href="index.php?act=addtocart&id='.$sp['ma_san_pham'].'"><i class="fas fa-shopping-cart"></i> Th??m v??o gi??? h??ng</a></button>
                                        <!-- Th??m v??o gi??? h??ng -->
                                </div>
                            </div>
                        ';
            }
            ?>
        </div>
    </div>
</main>