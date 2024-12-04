<section style="margin-top: 60px;" class="flat-spacing-4 pt_0">
    <div class="tf-main-product section-image-zoom">
        <div class="container">
            <div class="row">
                <?php foreach ($product as $products)
                    $discountedPrice = $products['price'] * (1 - $products['discount'] / 100); {  ?>
                    <div class="col-md-6">
                        <img src="../upload/<?= $products['thumbnail'] ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main">
                            </div>
                            <div class="tf-product-info-list other-image-zoom">

                                <div class="tf-product-info-title">
                                    <h5><?php echo $products['title'] ?></h5>
                                </div>
                                <div class="tf-product-info-price">
                                    <del class="price"><?php echo number_format($products['price'], 0, ',', '.'); ?>₫</del>
                                    <p style="color: red;" class="price">
                                        <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                    </p>
                                <?php          }   ?>
                                </div>
                                <div class="tf-product-info-buy-button">
                                    <div class="selector-actions">
                                        <div class="wrap-addcart clearfix">
                                            <div class="row-flex">
                                                <?php if ($products['stock'] > 0): ?>
                                                    <form action="index.php?action=addToCart" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $products['id'] ?>">
                                                        <input type="hidden" name="title" value="<?php echo $products['title'] ?>">
                                                        <input type="hidden" name="thumbnail" value="<?php echo $products['thumbnail'] ?>">
                                                        <input type="hidden" name="price" value="<?php echo $products['price'] ?>">
                                                        <label style="margin-top: 12px;" for="quantity">Số lượng:</label>
                                                        <div class="quantity-selector">
                                                            <button class="quantity-button" type="button" onclick="decreaseQuantity()">-</button>
                                                            <input type="number" id="quantity" name="quantity" value="1" min="1" readonly>
                                                            <button class="quantity-button" type="button" onclick="increaseQuantity()">+</button>
                                                        </div>
                                                        <button class="add-to-cart-button" type="submit">Thêm vào giỏ hàng</button>
                                                    </form>
                                                <?php else: ?>
                                                    <p style="color: red; font-weight: bold;">Hết hàng</p>
                                                <?php endif; ?>

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
                            <span class="inner">Mô tả chi tiết</span>
                        </li>

                        <li class="item-title">
                            <span class="inner">Bình luận</span>
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
                                        <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Quay lại</div>
                                        <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Viết đánh giá</div>
                                    </div>
                                </div>
                                <div class="reply-comment cancel-review-wrap">
                                    <?php foreach ($comments as $comment) { ?>
                                        <div class="comment">
                                            <p><strong>Người dùng : <?= $comment['fullname'] ?></strong></p>
                                            <p>Bình luận: <?= $comment['content_comment'] ?></p>
                                            <p><small>Ngày: <?= $comment['date_comment'] ?></small></p>
                                        </div>
                                        <hr>
                                    <?php     } ?>
                                </div>

                                <form class="form-write-review write-review-wrap" method="POST" action="?action=comment">
                                    <div class="heading">
                                        <h5>Viết bình luận :</h5>
                                    </div>
                                    <div class="form-content">

                                        <input type="hidden" name="id_product" value="<?= $id_product ?>">
                                        <label class="label" for="content_comment">Đánh giá</label>
                                        <textarea id="comment" name="content_comment" rows="4" placeholder="Write your comment here" tabindex="2" aria-required="true" required></textarea>
                                    </div>
                                    <div class="button-submit">
                                        <button class="tf-btn btn-fill animate-hover-btn" type="submit">Gửi</button>
                                    </div>
                                </form>
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
            <span class="title">Sản phẩm liên quan</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <?php foreach ($loadProductcategorys as $loadProductcategory) {

                        $discountedPrice = $loadProductcategory['price'] * (1 - $loadProductcategory['discount'] / 100);

                    ?>
                        <div class="swiper-slide" lazy="true">

                            <div class="card-product">
                                <div class="card-product-info">
                                    <div>
                                        <img src="<?= $loadProductcategory['thumbnail'] ?>" alt="">
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