  <!-- page-title -->
  <div class="tf-page-title">
      <div class="container-full">
          <div class="heading text-center">New Arrival</div>
          <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
      </div>
  </div>
  <section class="flat-spacing-2">
      <div class="container">
          <div class="tf-shop-control grid-3 align-items-center">
              <div class="tf-control-filter">
                  <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
              </div>
              <ul class="tf-control-layout d-flex justify-content-center">
                  <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                      <div class="item"><span class="icon icon-grid-2"></span></div>
                  </li>
                  <li class="tf-view-layout-switch sw-layout-3" data-value-grid="grid-3">
                      <div class="item"><span class="icon icon-grid-3"></span></div>
                  </li>
                  <li class="tf-view-layout-switch sw-layout-4 active" data-value-grid="grid-4">
                      <div class="item"><span class="icon icon-grid-4"></span></div>
                  </li>
                  <li class="tf-view-layout-switch sw-layout-5" data-value-grid="grid-5">
                      <div class="item"><span class="icon icon-grid-5"></span></div>
                  </li>
                  <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                      <div class="item"><span class="icon icon-grid-6"></span></div>
                  </li>
              </ul>
              <div class="tf-control-sorting d-flex justify-content-end">
                  <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                      <div class="btn-select">
                          <span class="text-sort-value">Featured</span>
                          <span class="icon icon-arrow-down"></span>
                      </div>
                      <div class="dropdown-menu">
                          <div class="select-item active">
                              <span class="text-value-item">Featured</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Best selling</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Alphabetically, A-Z</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Alphabetically, Z-A</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Price, low to high</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Price, high to low</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Date, old to new</span>
                          </div>
                          <div class="select-item">
                              <span class="text-value-item">Date, new to old</span>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <div class="wrapper-control-shop">
              <div class="meta-filter-shop"></div>
              <div class="grid-layout wrapper-shop" data-grid="grid-4">
                  <?php foreach ($productcategory as $productcategorys):
                        $discountedPrice = $productcategorys['price'] * (1 - $productcategorys['discount'] / 100);  ?>
                      <div class="card-product" data-price="16.95" data-color="orange black white">
                          <div class="card-product-wrapper">
                              <a href="product-detail.html" class="product-img">
                                  <img src="../upload/<?= $productcategorys['thumbnail'] ?>" alt="">
                              </a>
                          </div>
                          <div class="card-product-info">
                              <a href="product-detail.html" class="title link"><?php echo $productcategorys['title'] ?></a>
                              <div style="display: flex; gap:9px">
                                  <del class="price"><?php echo number_format($productcategorys['price'], 0, ',', '.'); ?>₫</del>
                                  <p style="color: red;" class="price">
                                      <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                  </p>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
  </section>