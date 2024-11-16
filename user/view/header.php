<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="public/plugins/fontawesome/all.css">
    <link rel="stylesheet" href="public/plugins/webfonts/font.css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="public/plugins/uikit/uikit.min.css" />

    <title></title>

</head>

<body>
    <div class="header" style="background-color: red;">
        <a style="color: #ffffff;text-decoration: none; " href="index.html">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 300K
            - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG</a>
    </div>

    <!--Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

        <div class="container">
            <a class="navbar-brand" href="?act=home">
                <h2 style="margin-top: 18px;font-weight: bold;margin-left:-100px">NewSport</h2>
            </a>
            <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="?act=home.php" style="color : #696969">TRANG CHỦ</a>
                    </li>

                    <li class="nav-item lisanpham">
                        <a class="nav-link" href="?action=product">SẢN PHẨM
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </a>
                        <ul class="sub_menu">
                            <?php foreach ($category as $categoryy) {
                            ?> <a class="dropdown-item" href="index.php?action=product-category&id=<?php echo $categoryy['id'] ?>">
                                    <?php echo $categoryy['name'] ?>
                                </a>
                            <?php      }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="introduce.html">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>

            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar" style="    background: white;
            width: 350px;">

                    <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                    <h3 style="font-size: 14px;
                color: #272727;
                text-transform: uppercase;
                margin: 3px 0 30px 0;
                font-weight: 500; letter-spacing: 2px;">Tìm kiếm</h3>
                    <div class="search-box wpo-wrapper-search">
                        <form action="index.php?action=search" class="searchform searchform-categoris ultimate-search" method="post">
                            <div class="wpo-search-inner" style="display:inline">
                                <input type="hidden" name="keyword" value="product">
                                <input required="" id="inputSearchAuto" name="keyword" maxlength="40" autocomplete="off"
                                    class="searchinput input-search search-input" type="text" size="20"
                                    placeholder="Tìm kiếm sản phẩm...">
                            </div>
                            <button type="submit" class="btn-search btn" id="search-header-btn">
                                <i style="font-weight:bold" class="fas fa-search"></i>
                            </button>
                        </form>
                        <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                            <div class="resultsContent"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offcanvas-flip2" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar" style="    background: white;
            width: 350px;">

                    <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                    <h3 style="font-size: 14px;
                color: #272727;
                text-transform: uppercase;
                margin: 3px 0 30px 0;
                font-weight: 500; letter-spacing: 2px;">Giỏ hàng</h3>
                    <div class="site-nav-container-last" style="color:#272727">
                        <div class="cart-view clearfix">
                            <table id="cart-view">
                                <tbody>
                                    <tr class="item_1">
                                        <td class="img"><a href="" title="Nike Air Max 90 Essential &quot;Grape&quot;"><img
                                                    src="images/shoes/1.jpg" alt="/products/nike-air-max-90-essential-grape"></a></td>
                                        <td>
                                            <a class="pro-title-view" style="color: #272727" href=""
                                                title="Nike Air Max 90 Essential &quot;Grape&quot;">Nike Air Max 90 Essential "Grape"</a>
                                            <span class="variant">Tím / 36</span>
                                            <span class="pro-quantity-view">1</span>
                                            <span class="pro-price-view">4,800,000₫</span>
                                            <span class="remove_link remove-cart"><a href=""><i style="color: #272727;"
                                                        class="fas fa-times"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="line"></span>
                            <table class="table-total">
                                <tbody>
                                    <tr>
                                        <td class="text-left">TỔNG TIỀN:</td>
                                        <td class="text-right" id="total-view-cart">4,800,000₫</td>
                                    </tr>
                                    <tr>
                                        <td class="distance-td"><a href="" class="linktocart button dark">Xem giỏ hàng</a></td>
                                        <td><a href="" class="linktocheckout button dark">Thanh toán</a></td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="" target="_blank" class="button btn-check" style="text-decoration:none;"><span>Click nhận mã giảm
                                    giá ngay !</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="icon-ol">
                <a style="color: #272727" href="">
                    <i class="fas fa-user-alt"></i>
                </a>
                <a href="#" class="" uk-toggle="target: #offcanvas-flip">
                    <i class="fas fa-search" style="color: black"></i>
                </a>

                <a style="color: #272727" href="#" uk-toggle="target: #offcanvas-flip2">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        </div>

    </nav>
    <!--Navbar-->

    <script async defer crossorigin="anonymous" src="public/plugins/sdk.js"></script>
    <script src="../public/plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="public/plugins/bootstrap/popper.min.js"></script>
    <script src="public/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="public/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="public/js/home.js"></script>
    <script src="public/js/script.js"></script>
    <script src="public/plugins/uikit/uikit.min.js"></script>
    <script src="public/plugins/uikit/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>