<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Sản phẩm mới</div>
        <p class="text-center text-2 text_black-2 mt_5">Mua sắm thỏa thích tại NewSport</p>
    </div>
</div>
<section class="flat-spacing-2">
    <div class="container">
        <div class="tf-shop-control grid-3 align-items-center">
            <div class="tf-control-filter">
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
        </div>
        <div class="wrapper-control-shop">
            <div class="meta-filter-shop"></div>
            <div class="grid-layout wrapper-shop" data-grid="grid-4">
                <?php foreach ($products as $product):
                    $discountedPrice = $product['price'] * (1 - $product['discount'] / 100);  ?>
                    <div class="card-product" data-price="16.95" data-color="orange black white">
                        <div class="card-product-wrapper">
                            <a href="index.php?action=product-detail&id=<?php echo $product['id']; ?>&category_id=<?php echo $product['category_id']; ?>">
                                <img src="../upload/<?= $product['thumbnail'] ?>" alt="">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <a href="index.php?action=product-detail&id=<?php echo $product['id']; ?>&category_id=<?php echo $product['category_id']; ?>" class="title link"><?php echo $product['title'] ?></a>
                            <div style="display: flex; gap:9px">
                                <del class="price"><?php echo number_format($product['price'], 0, ',', '.'); ?>₫</del>
                                <p style="color: red;" class="price">
                                    <?php echo number_format($discountedPrice, 0, ',', '.'); ?>₫
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
</section>
<div class="pagination">
    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
        <?php if ($page == $currentPage): ?>
            <span class="page active"><?php echo $page; ?></span>
        <?php else: ?>
            <a href="?action=product&page=<?php echo $page; ?>" class="page"><?php echo $page; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?action=product&page=<?php echo $currentPage + 1; ?>" class="next">></a>
    <?php else: ?>
        <span class="next disabled">></span>
    <?php endif; ?>
</div>