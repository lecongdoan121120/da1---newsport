<html class="no-js" lang="vi">

<body>

    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                <div class="tf-breadcrumb-list">
                    <a href="index.html" class="text">Home</a>
                    <i class="icon icon-arrow-right"></i>
                    <a href="#" class="text">Women</a>
                    <i class="icon icon-arrow-right"></i>
                    <span class="text">Cotton jersey top</span>
                </div>
                <div class="tf-breadcrumb-prev-next">
                    <a href="#" class="tf-breadcrumb-prev hover-tooltip center">
                        <i class="icon icon-arrow-left"></i>
                        <!-- <span class="tooltip">Cotton jersey top</span> -->
                    </a>
                    <a href="#" class="tf-breadcrumb-back hover-tooltip center">
                        <i class="icon icon-shop"></i>
                        <!-- <span class="tooltip">Back to Women</span> -->
                    </a>
                    <a href="#" class="tf-breadcrumb-next hover-tooltip center">
                        <i class="icon icon-arrow-right"></i>
                        <!-- <span class="tooltip">Cotton jersey top</span> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>

                            <div class="tf-product-info-list other-image-zoom">
                                <?php foreach ($product as $products)
                                    $discountedPrice = $products['price'] * (1 - $products['discount'] / 100); {  ?>
                                    <div class="tf-product-info-title">
                                        <h5><?php echo $products['title'] ?></h5>
                                    </div>
                                    <div class="tf-product-info-price">
                                        <del class="price-on-sale"><?php echo $products['price'] ?></del>
                                        <div class=""><?php echo $discountedPrice ?></div>
                                        <div class="badges--sale"><span><?php echo $products['discount'] ?></span>%</div>
                                    <?php          }   ?>
                                    </div>
                                    <div class="tf-product-info-buy-button">
                                        <div class="selector-actions">
                                            <div class="wrap-addcart clearfix">
                                                <div class="row-flex">
                                                    <form action="index.php?action=addToCart" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $products['id'] ?>">
                                                        <input type="hidden" name="title" value="<?php echo $products['title'] ?>">
                                                        <input type="hidden" name="price" value="<?php echo $products['price'] ?>">
                                                        <label style="margin-top: 12px;" for="quantity">Số lượng:</label>
                                                        <div class="quantity-selector">
                                                            <button class="quantity-button" type="button" onclick="decreaseQuantity()">-</button>
                                                            <input type="number" id="quantity" name="quantity" value="1" min="1" readonly>
                                                            <button class="quantity-button" type="button" onclick="increaseQuantity()">+</button>
                                                        </div>

                                                        <button class="add-to-cart-button" type="submit">Thêm vào giỏ hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-delivery-return">
                                        <div class="row">
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery">
                                                    <div class="icon">
                                                        <i class="icon-delivery-time"></i>
                                                    </div>
                                                    <p>Estimate delivery times: <span class="fw-7">12-26 days</span> (International), <span class="fw-7">3-6 days</span> (United States).</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery mb-0">
                                                    <div class="icon">
                                                        <i class="icon-return-order"></i>
                                                    </div>
                                                    <p>Return within <span class="fw-7">30 days</span> of purchase. Duties & taxes are non-refundable.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="flat-spacing-17 pt_0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-has-border">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">Description</span>
                            </li>

                            <li class="item-title">
                                <span class="inner">Review</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="">
                                    <p class="mb_30">
                                        <?php echo $products['description'] ?>
                                    </p>
                                    <div class="tf-product-des-demo">

                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="tab-reviews write-cancel-review-wrap">
                                    <div class="tab-reviews-heading">
                                        <div>
                                            <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Cancel Review</div>
                                            <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Write a review</div>
                                        </div>
                                    </div>
                                    <div class="reply-comment cancel-review-wrap">
                                        <!-- Danh sách bình luận -->
                                         
                                            <?php foreach ($comments as $comment){ ?>
                                                <div class="comment">
                                                    <p><strong>Người dùng ID <?= $comment['id_user'] ?>:</strong></p>
                                                    <p>Bình luận: <?= htmlspecialchars($comment['content_comment']) ?></p>
                                                    <p><small>Ngày: <?= $comment['date_comment'] ?></small></p>
                                                </div>
                                                <hr>
                                       <?php     } ?>
                                    </div>
                                    <!-- <form class="form-write-review write-review-wrap"> -->
                                    <!-- Form thêm bình luận -->
                                    <?php
                                    if (isset($_GET['id'], $_GET['category_id'])) {
                                        $id_product = $_GET['id']; // Lấy ID sản phẩm từ URL

                                    } else {
                                        echo "Không tìm thấy sản phẩm.";
                                        exit;
                                    }
                                    ?>
                                    <h3>Thêm bình luận</h3>
                                    <form method="POST" action="?action=comment">
                                        <input type="hidden" name="id_product" value="<?= htmlspecialchars($id_product) ?>"> <!-- ID sản phẩm -->
                                        <label for="content_comment">Bình luận:</label>
                                        <textarea name="content_comment" rows="4" required></textarea>
                                        <button type="submit">Gửi</button>
                                    </form>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-spacing-1 pt_0">
        <div class="container">
            <div class="flat-title">
                <span class="title">People Also Bought</span>
            </div>
            <div class="hover-sw-nav hover-sw-2">
                <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <?php foreach ($loadProductcategorys as $loadProductcategory) {
                            // Tính toán giá sau khi giảm
                            $discountedPrice = $loadProductcategory['price'] * (1 - $loadProductcategory['discount'] / 100);

                        ?>
                            <div class="swiper-slide" lazy="true">

                                <div class="card-product">
                                    <div class="card-product-info">
                                        <div style="display: flex; gap:9px">
                                            <del class="price"><?php echo number_format($loadProductcategory['price'], 0, ',', '.'); ?>₫</del>
                                            <p style="color: red;" class="price">
                                                <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
            </div>
        </div>
    </section>