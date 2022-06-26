<?php
    session_start();
    // var_dump($_SESSION['user']); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLYCOMPUTER</title>
    <!-- css slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icon_fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- icon url -->
    <link rel="icon" href="html_css_project/image/logo_xanh.png">
    <!-- style -->
    <link rel="stylesheet" href="html_css_project/style.css">
</head>
<body>
    <div class="container_fluid">
        <header class="">
            <div class="header-logo">
                <a href="index.php?act=home"><img src="img/LOGO_WHITE.png" alt="" class="img-fluid logo"></a>
            </div>
            <div class="header-function">
                <div class="header-search">
                    <form action="index.php?act=search_sp" method="POST">
                        <!-- <input class="input-text" type="text" placeholder="Nhập tên sản phẩm, từ khóa cần tìm">
                        <input class="input-submit" type="submit" value="Search"> -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="kyw" placeholder="Nhập tên sản phẩm, từ khóa cần tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <input class="btn btn-outline-secondary" name="search" type="submit" id="button-addon2" value="Search">
                        </div>
                    </form>
                </div>
                <div class="header-menu">
                    <ul>
                        <li><a href="index.php?act=home">Trang chủ</a></li>
                        <li><a href="index.php?act=maytinh">Laptop, PC</a></li>
                        <li><a href="index.php?act=phukien">Phụ kiện</a></li>
                        <li><a href="index.php?act=linhkien">Linh kiện</a></li>
                        <li><a href="index.php?act=listbv">Tin công nghệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-acc-cart">
                <div class="flex acc">
                    <div class="icon-rad">
                        <svg width="70" height="100">
                            <circle cx="35" cy="50" r="25" fill="#FFF" />
                        </svg>
                        <a href="index.php?act=tttk"><i class="far fa-user fa-lg"></i></a>
                    </div>
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '
                                <div class="user">
                                    <p>Xin chào</p>
                                    <h4>'.$_SESSION['user']['ten_khach_hang'].'</h4>
                                </div>
                            ';  
                        }else{
                            echo '<div>
                                    <div><a class="font-weight-600" href="index2.php?act=dangki">Đăng ký</a></div>
                                    <div><a class="font-weight-600" href="index2.php?act=dangnhap">Đăng nhập</a></div>
                                </div>';
                        }
                    ?>
                    
                    
                </div>
                <div class="line"></div>
                <div class="flex cart">
                    <div class="icon-rad">
                        <svg width="75" height="100">
                            <circle cx="35" cy="50" r="25" fill="#FFF" />
                        </svg>
                        <a href="index.php?act=viewcart"><i class="fas fa-shopping-cart"></i></a>
                        <a class="font-weight-600" href="index.php?act=viewcart">Giỏ hàng</a>
                    </div>
                </div>
            </div>
        </header>