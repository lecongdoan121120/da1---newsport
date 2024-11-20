<!DOCTYPE html>
<html lang="en">

<head>
    <!-- LINK -->
    <link rel="stylesheet" href="public/fonts/fonts.css">
    <link rel="stylesheet" href="public/fonts/font-icons.css">
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
                                    <a href="?action=" class="item-link letter-spacing-3">Giới thiệu</a>
                                </li>
                                <li class="menu-item">
                                    <a href="?action=" class="item-link letter-spacing-3">Tin tức</a>
                                </li>
                                <li class="menu-item">
                                    <a href="?action=" class="item-link letter-spacing-3">Liên hệ</a>
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
                            <li class="nav-account"><a href="#login" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                            <li class="nav-wishlist"><a href="wishlist.html" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box bg-yellow-9 text_black">0</span></a></li>
                            <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box bg-yellow-9 text_black">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>

</html>