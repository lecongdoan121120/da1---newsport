 <!-- TRANG SẢN PHẨM -->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Document</title>
 </head>

 <body>
     <div class="breadcrumb-shop" style="margin-right: 500px;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
                     <ol class="breadcrumb breadcrumb-arrows">
                         <li>
                             <a href="index.html">
                                 <span>Trang chủ</span>
                             </a>
                         </li>
                         <li>
                             <a href="Product.html">
                                 <span>Danh mục</span>
                             </a>
                         </li>
                         <li>
                             <span><span style="color: #777777">Tất cả sản phẩm</span></span>
                         </li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="hot_sp" style="padding-bottom: 10px;">
             <h2 style="text-align:center;padding-top: 10px">
                 <a style="font-size: 28px;color: black;text-decoration: none" href="">Tất cả sản phẩm</a>
             </h2>
         </div>
     </div>
     <div class="container" style="padding-bottom: 50px;">
         <div class="row">
             <?php foreach ($product as $products) {
                    // Tính toán giá sau khi giảm
                    $discountedPrice = $products['price'] * (1 - $products['discount'] / 100);
                    $discountAmount = $products['price'] - $discountedPrice;
                ?>
                 <div class="col-md-3 col-sm-6 col-xs-6 mb-4">
                     <div class="product-block">
                         <div class="product-img position-relative overflow-hidden">
                             <a href="index.php?action=product-detail&id=<?php echo $products['id']; ?>&category_id=<?php echo $products['category_id']; ?>" title="" class="img-resize d-block">
                                 <img src="" alt="" class="img-fluid primary-img">
                             </a>
                         </div>
                         <div class="product-detail text-center mt-3">
                             <h5 class="product-title">
                                 <a href="index.php?action=product-detail&id=<?php echo $products['id']; ?>&category_id=<?php echo $products['category_id']; ?>">
                                     <?php echo $products['title']; ?>
                                 </a>
                             </h5>
                             <div class="price-discount">
                                 <?php if ($products['discount'] > 0) { ?>
                                     <span class="original-price text-muted">
                                         <?php echo number_format($products['price'], 0, ',', '.'); ?>₫
                                     </span>
                                     <span class="discount-percent text-danger ms-1">-<?php echo $products['discount']; ?>%</span>
                                     <br>
                                     <span class="discounted-price d-block">
                                         <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                     </span>
                                     <span class="discount-amount text-success d-block">
                                         Giảm <?php echo number_format($discountAmount, 0, ',', '.'); ?>₫
                                     </span>
                                 <?php } else { ?>
                                     <span class="discounted-price d-block">
                                         <?php echo number_format($products['price'], 0, ',', '.'); ?>₫
                                     </span>
                                 <?php } ?>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>



 </body>

 </html>