<?php
    // session_start();
    require_once (__DIR__."/../../model/pdo.php");
    require_once (__DIR__."/../../model/binhluan.php");
    //lấy đường dẫn tuyệt đối, k nhúng lại.
    // $idbv = $_REQUEST['id'];
    // print_r($_REQUEST);
    $idbv=$_GET['id'];
    // echo $idbv;
    $listbl=loadall_binhluan($idbv);
    
    // var_dump($dsbl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="../../html_css_project/style.css">
</head>
<body>
    <div class="formbinhluan">
        <table>
            <tr>
                <th>Tên khách hàng</th>
                <!-- <th>mã bv</th> -->
                <th>Nội dung</th>
                <th>Thời gian</th>
            </tr>
            <?php
                foreach ($listbl as $bl) {
                    echo '<tr><td>'.$bl['ten_khach_hang'].'</td>';
                    // echo '<td> '.$bl['ma_bai_viet'].'</td>';
                    echo '<td> '.$bl['noi_dung_bl'].'</td>';
                    echo '<td> '.$bl['thoi_gian'].'</td></tr>';
                }
            
            ?>
        </table>
        <div class="input-group mb-3">
            <form action="" method="POST">
                <input type="hidden" name="idbv" value="<?=$idbv?>" >
                <input type="text" class="form-control input-bvct1" name="noidung" placeholder="nhập bình luận tại đây">
                <input class="btn btn-outline-secondary input-bvct2" type="submit" name="guibinhluan" value="Gửi">
            </form>
        </div>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung = $_POST['noidung'];
                $idbv = $_POST['idbv'];
                $tenkh =$_SESSION['user']['ten_khach_hang'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaybinhluan = date("H:i:s a d/m/Y");
                insert_binhluan($noidung,$tenkh,$idbv,$ngaybinhluan);
                
                // header("Location:index.php?act=baivietCT");
            }
            
        ?>
    </div>
</body>
</html>