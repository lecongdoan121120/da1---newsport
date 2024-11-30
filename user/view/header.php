<!DOCTYPE html>
<html lang="en">

<head>
    <!-- LINK -->
    <link rel="stylesheet" href="public/fonts/font-icons.css">
    <link rel="stylesheet" href="public/fonts/fonts.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="public/css/styles.css" />
    <link rel="stylesheet" href="public/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="public/css/drift-basic.mincss" />
    <link rel="stylesheet" href="public/css/image-compare-viewer.mincss" />
    <link rel="stylesheet" href="public/css/photoswipemin.css" />
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css" />



    <title>Website</title>
    <!-- LINK -->
</head>

<body class="preload-wrapper">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <header id="header" class="header-default header-uppercase">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-xl-5 tf-md-hidden">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center gap-40">
                                <li class="menu-item">
                                    <a href="?action=home" class="item-link letter-spacing-3">Trang chủ</a>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="?action=product" class="item-link">Sản phẩm</a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <?php foreach ($category as $categoryy) { ?>
                                                <li>
                                                    <a class="menu-link-text link text_black-2" href="index.php?action=product-category&id=<?php echo $categoryy['id']; ?>">
                                                        <?php echo $categoryy['name']; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="?action=about" class="item-link letter-spacing-3">Giới thiệu</a>
                                </li>
                                <li class="menu-item">
                                    <a href="?action=blog" class="item-link letter-spacing-3">Tin tức</a>
                                </li>
                                <li class="menu-item">
                                    <a href="?action=contact" class="item-link letter-spacing-3" class="item-link letter-spacing-3">Liên hệ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 text-center">
                        <a href="?action=home" class="logo-header">
                            <p style="font-size: 30px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ">NewSport</p>
                        </a>
                    </div>
                    <div class="col-xl-5 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                            <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                            <?php

                            $role = isset($_SESSION['user']['role']) ? $_SESSION['user']['role'] : 2;

                            ?>
                            <div class="dropdown show">
                                <?php if (isset($_SESSION['user'])): ?>
                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-account"></i>
                                    </a>
                                    <div style="margin-right: 98px; margin-top:20px" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="?action=inforuser">Tài khoản</a>
                                        <a class="dropdown-item" href="?action=logout">Đăng xuất</a>
                                        <?php if ($role === 1): ?>
                                            <a class="dropdown-item" href="/duan1/admin/">Quản trị viên</a>
                                        <?php endif; ?>
                                    </div>
                                <?php else: ?>
                                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon icon-account"></i>
                                    </a>
                                    <div style="margin-right: 98px; margin-top:20px" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="?action=login">Đăng nhập</a>
                                        <a class="dropdown-item" href="?action=register">Đăng ký</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $totalQuantity = $_SESSION['total'] ?? 0;  ?>
                            <li class="nav-cart"><a href="?action=viewCart" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box"><?php echo $totalQuantity ?></span></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">

        <header class="tf-search-head">
            <div class="title fw-5">
                Tìm kiếm tại đây
                <div class="close">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </div>
            <div class="tf-search-sticky">
                <form action="?action=search" class="tf-mini-search-frm" method="post">
                    <fieldset class="text">
                        <input type="text" placeholder="Search" class="" name="keyword" tabindex="0" value="" aria-required="true" required="">
                    </fieldset>
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </header>

    </div>
</body>

</html>