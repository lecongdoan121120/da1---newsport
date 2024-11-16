   <!--Product-->
   <section>
       <div class="content">
           <div class="container">
               <div class="hot_sp">
                   <h2 style="text-align:center;">
                       <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm mới</a>
                   </h2>
                   <div class="view-all" style="text-align:center;">
                       <a style="color: black;text-decoration: none" href="">Xem thêm</a>
                   </div>
               </div>
           </div>
           <!--Product-->
       </div>
       <div class="container" style="padding-bottom: 50px;">
           <div class="row">
               <?php foreach ($productcategory as $productcategorys) {
                    // Tính toán giá sau khi giảm
                    $discountedPrice = $productcategorys['price'] * (1 - $productcategorys['discount'] / 100);
                    $discountAmount = $productcategorys['price'] - $discountedPrice;
                ?>
                   <div class="col-md-3 col-sm-6 col-xs-6 mb-4">
                       <div class="product-block">
                           <div class="product-img position-relative overflow-hidden">
                               <a href="index.php?action=product-detail&id=<?php echo $productcategorys['id']; ?>&category_id=<?php echo $productcategorys['category_id']; ?>" title="" class="img-resize d-block">
                                   <img src="" alt="" class="img-fluid primary-img">
                               </a>
                           </div>
                           <div class="product-detail text-center mt-3">
                               <h5 class="product-title">
                                   <a href="index.php?action=product-detail&id=<?php echo $productcategorys['id']; ?>&category_id=<?php echo $productcategorys['category_id']; ?>">
                                       <?php echo $productcategorys['title']; ?>
                                   </a>
                               </h5>
                               <div class="price-discount">
                                   <?php if ($productcategorys['discount'] > 0) { ?>
                                       <span class="original-price text-muted">
                                           <?php echo number_format($productcategorys['price'], 0, ',', '.'); ?>₫
                                       </span>
                                       <span class="discount-percent text-danger ms-1">-<?php echo $productcategorys['discount']; ?>%</span>
                                       <br>
                                       <span class="discounted-price d-block">
                                           <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                       </span>
                                       <span class="discount-amount text-success d-block">
                                           Giảm <?php echo number_format($discountAmount, 0, ',', '.'); ?>₫
                                       </span>
                                   <?php } else { ?>
                                       <span class="discounted-price d-block">
                                           <?php echo number_format($productcategorys['price'], 0, ',', '.'); ?>₫
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
   <!--Product-->