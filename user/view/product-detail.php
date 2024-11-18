<html class="no-js" lang="vi">

<body>
    <!--  detail product -->
    <main class="">
        <div id="product" class="productDetail-page">
            <!--  menu header seo -->
            <div class="breadcrumb-shop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
                            <ol class="breadcrumb breadcrumb-arrows">
                                <li>
                                    <a href="home.html">
                                        <span">Trang chủ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Sản phẩm</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <span>
                                        <span itemprop="name">Nike Air Max 90</span>
                                    </span>
                                    <meta itemprop="position" content="3">
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- detail product chính -->
            <div class="container">
                <div class="row product-detail-wrapper">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row product-detail-main pr_style_01">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-gallery">
                                    <div class="product-gallery__thumbs-container hidden-sm hidden-xs">
                                        <div class="product-gallery__thumbs thumb-fix">
                                            <div class="product-gallery__thumb" id="thumb1">
                                                <a href="javascript:void(0);" data-image="images/detailproduct/1.jpg" data-zoom-image="images/detailproduct/1.jpg">
                                                    <img src="/user/public/images/shoes/1-1.jpg" alt="Nike Air Max 90 Essential">
                                                </a>
                                            </div>
                                            <div class="product-gallery__thumb" id="thumb2">
                                                <a href="javascript:void(0);" data-image="images/detailproduct/2.jpg" data-zoom-image="images/detailproduct/2.jpg">
                                                    <img src="/user/public/images/shoes/1-1.jpg" alt="Nike Air Max 90 Essential">
                                                </a>
                                            </div>
                                            <div class="product-gallery__thumb" id="thumb3">
                                                <a href="javascript:void(0);" data-image="/user/public/images/shoes/1-1.jpg" data-zoom-image="images/detailproduct/3.jpg">
                                                    <img src="/user/public/images/shoes/1-1.jpg" alt="Nike Air Max 90 Essential">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image-detail">
                                        <img id="mainImage" src="/user/public/images/shoes/1-1.jpg" alt="Nike Air Max 90 Essential">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12  product-content-desc" id="detail-product">
                                <div class="product-content-desc-1">
                                    <?php
                                    foreach ($product as $products) { ?>
                                        <div class="product-title">
                                            <h1><?php echo $products['title'] ?></h1>
                                            <span id="pro_sku">Mã sản phẩm : <?php echo $products['id'] ?></span>
                                        </div>
                                        <div class="product-price" id="price-preview"><span class="pro-price"></span>
                                            <del class="original-price text-muted">
                                                <?php echo number_format($products['price'], 0, ',', '.'); ?>₫
                                            </del>
                                            <span class="discount-percent text-danger ms-1"><?php echo $products['discount']; ?>đ</span>

                                        </div>
                                    <?php }  ?>
                                    <div class="selector-actions">

                                        <div class="wrap-addcart clearfix">
                                            <div class="row-flex">
                                                <form action="index.php?action=addToCart" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $products['id'] ?>">
                                                    <input type="hidden" name="title" value="<?php echo $products['title'] ?>">
                                                    <input type="hidden" name="price" value="<?php echo $products['price'] ?>">
                                                    <label for="quantity">Số lượng:</label>
                                                    <input type="number" name="quantity" value="1" min="1" required>
                                                    <button type="submit">Thêm vào giỏ hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <div class="title-bl">
                                            <h2>Mô tả</h2>
                                        </div>
                                        <div class="description-content">
                                            <div class="description-productdetail">
                                                <p><?php echo $products['description'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="heading-title text-center">
                            <h2>Sản phẩm liên quan</h2>
                        </div>
                        <div class="container" style="padding-bottom: 50px;">
                            <div class="row">
                                <?php foreach ($loadProductcategorys as $loadProductcategory) {
                                    // Tính toán giá sau khi giảm
                                    $discountedPrice = $loadProductcategory['price'] * (1 - $loadProductcategory['discount'] / 100);
                                    $discountAmount = $loadProductcategory['price'] - $discountedPrice;
                                ?>
                                    <div class="col-md-3 col-sm-6 col-xs-6 mb-4">
                                        <div class="product-block">
                                            <div class="product-img position-relative overflow-hidden">
                                                <a href="index.php?action=product-detail&id=<?php echo $loadProductcategory['id']; ?>&category_id=<?php echo $loadProductcategory['category_id']; ?>" title="" class="img-resize d-block">
                                                    <img src="" alt="" class="img-fluid primary-img">
                                                </a>
                                            </div>
                                            <div class="product-detail text-center mt-3">
                                                <h5 class="product-title">
                                                    <a href="index.php?action=product-detail&id=<?php echo $loadProductcategory['id']; ?>&category_id=<?php echo $loadProductcategory['category_id']; ?>">
                                                        <?php echo $loadProductcategory['title']; ?>
                                                    </a>
                                                </h5>
                                                <div class="price-discount">
                                                    <?php if ($loadProductcategory['discount'] > 0) { ?>
                                                        <span class="original-price text-muted">
                                                            <?php echo number_format($loadProductcategory['price'], 0, ',', '.'); ?>₫
                                                        </span>
                                                        <span class="discount-percent text-danger ms-1">-<?php echo $loadProductcategory['discount']; ?>%</span>
                                                        <br>
                                                        <span class="discounted-price d-block">
                                                            <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                                        </span>
                                                        <span class="discount-amount text-success d-block">
                                                            Giảm <?php echo number_format($discountAmount, 0, ',', '.'); ?>₫
                                                        </span>
                                                    <?php } else { ?>
                                                        <span class="discounted-price d-block">
                                                            <?php echo number_format($loadProductcategory['price'], 0, ',', '.'); ?>₫
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- show zoom detail product -->
        <!-- zoom -->
        <div class="product-zoom11">
            <div class="product-zom">
                <div class="divclose">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div class="owl-carousel owl-theme owl-product1">

                    <div class="item"><img src="images/detailproduct/1.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/2.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/3.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/4.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/5.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/6.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/7.jpg" alt="">
                    </div>
                    <div class="item"><img src="images/detailproduct/8.jpg" alt="">
                    </div>



                </div>
            </div>
        </div>

    </main>
    <!--gallery-->
    <section class="section section-gallery">
        <div class="">
            <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
                <h2 style="text-align:center;padding-top: 10px">
                    <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng và Runner Inn</a>
                </h2>
            </div>
            <div class="list-gallery clearfix">
                <ul class="shoes-gp">
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_1.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_2.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_3.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_4.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_5.jpg" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="gallery_item">
                            <img class="img-resize" src="images/shoes/gallery_item_6.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
    <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="plugins/uikit/uikit.min.js"></script>
    <script src="plugins/uikit/uikit-icons.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/home.js"></script>
    <!-- <script src="js/divzoom.js"></script> -->
    <script>
        // Lấy tất cả các ảnh nhỏ
        const thumbnails = document.querySelectorAll('.product-gallery__thumb a');

        // Lấy ảnh chính cần thay đổi
        const mainImage = document.getElementById('mainImage');

        // Thêm sự kiện cho mỗi ảnh nhỏ
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', (event) => {
                event.preventDefault(); // Ngăn chặn link di chuyển
                const newImageSrc = thumbnail.getAttribute('data-image'); // Lấy đường dẫn ảnh mới
                mainImage.src = newImageSrc; // Cập nhật ảnh chính
            });
        });
    </script>
</body>

</html>