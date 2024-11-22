   <!-- page-title -->
   <div class="tf-page-title">
       <div class="container-full">
           <div class="heading text-center">Kết quả tìm kiếm</div>
           <p class="text-center text-2 text_black-2 mt_5"></p>
       </div>
   </div>
   <!-- /page-title -->

   <!-- Section Product -->
   <section class="flat-spacing-2">
       <div class="container">

           <div class="wrapper-control-shop">
               <div class="meta-filter-shop"></div>
               <div class="grid-layout wrapper-shop" data-grid="grid-4">
                   <?php if (!empty($searchproduct)): ?>
                       <?php foreach ($searchproduct as $searchproducts) {
                            $discountedPrice = $searchproducts['price'] * (1 - $searchproducts['discount'] / 100);  ?>
                           <div class="card-product" data-price="16.95" data-color="orange black white">
                               <div class="card-product-wrapper">
                                   <a href="product-detail.html" class="product-img">
                                       <img src="../upload/<?= $searchproducts['thumbnail'] ?>" alt="">
                                   </a>
                                   <div class="list-product-btn absolute-2">
                                       <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                           <span class="icon icon-bag"></span>
                                           <span class="tooltip">Quick Add</span>
                                       </a>
                                       <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                           <span class="icon icon-heart"></span>
                                           <span class="tooltip">Add to Wishlist</span>
                                           <span class="icon icon-delete"></span>
                                       </a>
                                       <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                           <span class="icon icon-compare"></span>
                                           <span class="tooltip">Add to Compare</span>
                                           <span class="icon icon-check"></span>
                                       </a>
                                       <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                           <span class="icon icon-view"></span>
                                           <span class="tooltip">Quick View</span>
                                       </a>
                                   </div>
                               </div>
                               <div class="card-product-info">
                                   <a href="product-detail.html" class="title link"><?php echo $searchproducts['title'] ?></a>
                                   <div style="display: flex; gap:9px">
                                       <del class="price"><?php echo number_format($searchproducts['price'], 0, ',', '.'); ?>₫</del>
                                       <p style="color: red;" class="price">
                                           <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                       </p>
                                   </div>
                               </div>
                           </div>

                       <?php } ?>
                   <?php else: ?>
                       <strong style="text-align: center; margin-left:460px;width:500px;margin-top:-100px">Không có sản phẩm nào phù hợp với từ khóa tìm kiếm của bạn.</strong>
                   <?php endif; ?>  
   </section>