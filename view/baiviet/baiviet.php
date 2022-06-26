<main>
    <div class="title-page">
        <h2>TIN CÔNG NGHỆ</h2>
    </div>
    <div class="bv-content">
        <div class="bv-content-left">
        <?php
            
            foreach ($listbaiviet as $baiviet) {
                extract($baiviet);
                $hinhbv = $img_path.$anh_bai_viet;
                echo '
                <div class="content-left_bv1">
                    <div class="img-bv">
                        <img src="'.$hinhbv.'" alt="">
                    </div>
                    <div class="text-bv">
                    <a href="index.php?act=baivietCT&id='.$ma_bai_viet.'"><h5>'.$tieu_de.'</h5></a>
                        <div class="nd">
                            <p>'.$noi_dung_bv.'</p>
                        </div>
                        <p><a href="index.php?act=baivietCT&id='.$ma_bai_viet.'">Xem chi tiết</a></p>
                    </div> 
                </div>                   
            ';
            }               
        ?>
        </div>
        <!-- <img src="../upload/bv1.jpg" alt=""> -->
        <div class="bv-content-right">
            <div class="bv-content-right1">
                <h5>Bài viết mới nhất</h5>
                <?php
                    foreach ($listbaivietnew as $bvnew) {
                        extract($bvnew);
                            echo '<p><a href="">1. '.$tieu_de.'</a></p>';
                    }
                
                ?>
                
            </div>
            <div class="bv-content-right1">
                <h5>Bài viết xem nhiều nhất</h5>
                <?php
                    foreach ($listbaivietnew as $bvnew) {
                        extract($bvnew);
                            echo '<p><a href="">1. '.$tieu_de.'</a></p>';
                    }
                
                ?>
            </div>
        </div>
    </div>
</main>
