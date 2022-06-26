<div class="wrapper">
    <div class="bvct-content-top">
        <?php
        extract($baiviet);
        $hinhbv = $img_path . $anh_bai_viet;
        echo ' <img src="' . $hinhbv . '" alt="">
                    <div class="gradient">
                        <h1>' . $tieu_de . '</h1>
                    </div>  ';

        ?>

    </div>
    <div class="bvct-content-mid mb20">
        <div class="bvct-content-mid_left">
            <div class="chitietbv mb20">
                <?php
                echo '
                    <img src="' . $hinhbv . '" alt="">
                    <p class="mb20">' . $noi_dung_bv . '</p>
                <div class="ngaydangbai">
                    <i class="far fa-clock" style="color:rgb(0, 145, 255);"></i>
                    <p>' . $ngay_dang . '</p>
                </div>';

                ?>
            </div>

            <div class="box-bvlienquan">
                <h4 class="mb20">Bài viết nổi bật</h4>
                <div class="listbvlienquan mb20">
                    <?php
                    foreach ($listbaivietnew as $bvnew) {
                        extract($bvnew);
                        $hinhbvnew = $img_path . $anh_bai_viet;
                        // var_dump($bvnew) ;
                        echo '<div class="bvlienquan mb20">
                                    <img src="' . $hinhbvnew . '" alt="">
                                    <div class="text-bvlq">
                                        <h6><a href="index.php?act=baivietCT&id=' . $ma_bai_viet . '">' . $tieu_de . '</a></h6>
                                        <div class="ngaydangbai">
                                            <i class="far fa-clock" style="color:rgb(0, 145, 255);"></i>
                                            <p>' . $ngay_dang . '</p>
                                        </div>
                                    </div>
                                </div>';
                    }

                    ?>
                </div>

            </div>
            <div class="binhluanbv">
                <h4 class="mb20">Đăng bình luận về bài viết này</h4>
                <?php
                if (isset($_SESSION['user'])) {
                    include __DIR__ . "/../binhluan/binhluanform.php";
                } else {
                    echo '<h6 class="danger">Bạn cần đăng nhập để thực hiện bình luận</h4>';
                }
                ?>
            </div>
        </div>
        <div class="bvct-content-mid_right">
            <h4 class="mb20">Bài viết nổi bật</h4>
            <?php
            foreach ($listbaivietnew as $bvnew) {
                extract($bvnew);
                $hinhbvnew = $img_path . $anh_bai_viet;
                echo '<div class="bvnoibat mb20">
                    <img src="' . $hinhbvnew . '" alt="">
                    <h6><a href="index.php?act=baivietCT&id=' . $ma_bai_viet . '">' . $tieu_de . '</a> </h6>
                    <div class="ngaydangbai">
                        <i class="far fa-clock" style="color:rgb(0, 145, 255);"></i>
                        <p>' . $ngay_dang . '</p>
                    </div>
                </div>';
            } ?>
        </div>
    </div>
</div>