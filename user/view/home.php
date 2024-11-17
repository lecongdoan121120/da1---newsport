 <!--Content-->
 <div class="content">
     <!-- Slider -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="/user/public/image/1.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="/user/public/image/2.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="/user/public/image/3.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </button>
     </div>
     <!-- Slider -->
     <div class="container">
         <div class="hot_sp" style="padding-bottom: 10px;">
             <h2 style="text-align:center;padding-top: 10px">
                 <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm mới</a>
             </h2>
         </div>
     </div>
     <!--Product-->
     <div class="container" style="padding-bottom: 50px;">
         <div class="row">
             <?php foreach ($products as $product) {
                    // Tính toán giá sau khi giảm
                    $discountedPrice = $product['price'] * (1 - $product['discount'] / 100);
                    $discountAmount = $product['price'] - $discountedPrice;
                ?>
                 <div class="col-md-3 col-sm-6 col-xs-6 mb-4">
                     <div class="product-block">
                         <div class="">
                             <a href="index.php?action=product-detail&id=<?php echo $product['id']; ?>&category_id=<?php echo $product['category_id']; ?>" title="" class="img-resize d-block">
                                 <img src="/user/public/image/4.jpg" alt="" class="img-fluid primary-img">
                             </a>
                         </div>
                         <div class="product-detail text-center mt-3">
                             <h5 class="product-title">
                                 <a style=" color: black;font-size: 14px;text-decoration: none;" href="index.php?action=product-detail&id=<?php echo $product['id']; ?>&category_id=<?php echo $product['category_id']; ?>">
                                     <?php echo $product['title']; ?>
                                 </a>
                             </h5>
                             <div class="price-discount">
                                 <?php if ($product['discount'] > 0) { ?>
                                     <del class="original-price text-muted">
                                         <?php echo number_format($product['price'], 0, ',', '.'); ?>₫
                                     </del>
                                     <span style="font-size: 14px;" class="discount-percent text-danger ms-1">-<?php echo $product['discount']; ?>%</span>
                                     <br>
                                     <span class="discounted-price d-block">
                                         <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                     </span>
                                     <span class="discount-amount text-success d-block">
                                         Giảm <?php echo number_format($discountAmount, 0, ',', '.'); ?>₫
                                     </span>
                                 <?php } else { ?>
                                     <span style="color: black;" class="discounted-price d-block">
                                         <?php echo number_format($product['price'], 0, ',', '.'); ?>₫
                                     </span>
                                 <?php } ?>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
     <!--Product-->
     <section class="section wrapper-home-banner">
         <div class="container-fluid" style="padding-bottom: 50px;">
             <div class="row">
                 <div class="col-xs-12 col-sm-4 home-banner-pd">
                     <div class="block-banner-category">
                         <a href="#" class="link-banner wrap-flex-align flex-column">
                             <div class="fg-image fade-box">
                                 <img class="lazyloaded" src="/user/public/image/5.jpg" style="width: 1000px;" alt="">
                             </div>
                             <figcaption class="caption_banner site-animation">

                                 <h2>
                                     Đại sứ thương hiệu
                                 </h2>
                             </figcaption>
                         </a>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-4 home-banner-pd">
                     <div class="block-banner-category">
                         <a href="#" class="link-banner wrap-flex-align flex-column">
                             <div class="fg-image fade-box">
                                 <img class="lazyloaded" src="/user/public/image/5.jpg" alt="Shoes">
                             </div>
                             <figcaption class="caption_banner site-animation">

                                 <h2>
                                     Thương hiệu
                                 </h2>
                             </figcaption>
                         </a>
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-4 home-banner-pd">
                     <div class="block-banner-category">
                         <a href="#" class="link-banner wrap-flex-align flex-column">
                             <div class="fg-image">
                                 <img class="lazyloaded" src="/user/public/image/5.jpg" alt="Shoes">
                             </div>
                             <figcaption class="caption_banner site-animation">
                                 <p></p>
                                 <h2>
                                     Blog
                                 </h2>
                             </figcaption>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--Product-->
     <section>
         <div class="content">
             <div class="container">
                 <div class="hot_sp">
                     <h2 style="text-align:center;">
                         <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm nổi bật</a>
                     </h2>
                 </div>
             </div>
             <!--Product-->
         </div>
         <div class="container" style="padding-bottom: 50px;">
             <div class="row">
                 <?php foreach ($loadProductview as $loadProductviews) {
                        // Tính toán giá sau khi giảm
                        $discountedPrice = $loadProductviews['price'] * (1 - $loadProductviews['discount'] / 100);
                        $discountAmount = $loadProductviews['price'] - $discountedPrice;
                    ?>
                     <div class="col-md-3 col-sm-6 col-xs-6 mb-4">
                         <div class="product-block">
                             <div class="">
                                 <a href="index.php?action=product-detail&id=<?php echo $loadProductviews['id']; ?>&category_id=<?php echo $loadProductviews['category_id']; ?>" title="" class="img-resize d-block">
                                     <img src="/user/public/image/1.png" alt="" class="img-fluid primary-img">
                                 </a>
                             </div>
                             <div class="product-detail text-center mt-3">
                                 <h5 class="product-title">
                                     <a style=" color: black;font-size: 14px;text-decoration: none;" href="index.php?action=product-detail&id=<?php echo $loadProductviews['id']; ?>&category_id=<?php echo $loadProductviews['category_id']; ?>">
                                         <?php echo $loadProductviews['title']; ?>
                                     </a>
                                 </h5>
                                 <div class="price-discount">
                                     <?php if ($loadProductviews['discount'] > 0) { ?>
                                         <span class="original-price text-muted">
                                             <?php echo number_format($loadProductviews['price'], 0, ',', '.'); ?>₫
                                         </span>
                                         <span style="font-size: 14px;" class="discount-percent text-danger ms-1">-<?php echo $loadProductviews['discount']; ?>%</span>
                                         <br>
                                         <span class="discounted-price d-block">
                                             <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                         </span>
                                         <span class="discount-amount text-success d-block">
                                             Giảm <?php echo number_format($discountAmount, 0, ',', '.'); ?>₫
                                         </span>
                                     <?php } else { ?>
                                         <span class="discounted-price d-block">
                                             <?php echo number_format($loadProductviews['price'], 0, ',', '.'); ?>₫
                                         </span>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
             </div>
         </div>
     </section>
     <section class="section section-gallery" style="margin-top: -100px;">
         <div class="">
             <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
                 <h2 style="text-align:center;padding-top: 10px">
                     <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng và Newsport</a>
                 </h2>
             </div>
             <div class="list-gallery clearfix">
                 <ul class="shoes-gp">
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/6.jpg" style="width:10000px" alt="">
                         </div>
                     </li>
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/7.jpg" alt="">
                         </div>
                     </li>
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/8.jpg" alt="">
                         </div>
                     </li>
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/9.jpg" alt="">
                         </div>
                     </li>
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/10.jpg" alt="">
                         </div>
                     </li>
                     <li>
                         <div class="gallery_item">
                             <img class="img-resize" src="/user/public/image/11.jpg" alt="">
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </section>
 </div>