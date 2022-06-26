<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - POLYCOMPUTER</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
    <!-- icon url -->
    <link rel="icon" href="../html_css_project/image/logo_xanh.png">
</head>
<body>
    <div class="wrapper">
        <div class="boxleft">          
            <img src="../img/LOGO_WHITE.png" alt="">
            <div class="menu">
                <ul>
                    <li class="<?php if(@$_GET['act']=='home') echo 'click'; ?>"><a href="index.php?act=home">Trang chủ</a></li>
                    <li class="<?php if(@$_GET['act']=='listdm') echo 'click'; ?>"><a href="index.php?act=listdm">Quản lý loại hàng</a></li>
                    <li class="<?php if(@$_GET['act']=='listsp') echo 'click'; ?>"><a href="index.php?act=listsp">Quản lý sản phẩm</a></li>
                    <li class="<?php if(@$_GET['act']=='listkh') echo 'click'; ?>"><a href="index.php?act=listkh">Quản lý khách hàng</a></li>
                    <li class="<?php if(@$_GET['act']=='listbl') echo 'click'; ?>"><a href="index.php?act=listbl">Quản lý bình luận</a></li>
                    <li class="<?php if(@$_GET['act']=='listbv') echo 'click'; ?>"><a href="index.php?act=listbv">Quản lý bài viết</a></li>
                    <li class="<?php if(@$_GET['act']=='listdonhang') echo 'click'; ?>"><a href="index.php?act=listdonhang">Quản lý đơn hàng</a></li>
                    <li class=""><a href="../index.php">Quay lại cửa hàng</a></li>
                </ul>
            </div>
        </div>
