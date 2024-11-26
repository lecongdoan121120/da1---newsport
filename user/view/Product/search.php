<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Kết quả tìm kiếm</div>
        <p class="text-center text-2 text_black-2 mt_5"></p>
    </div>
</div>
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
                                <a href="index.php?action=product-detail&id=<?php echo $searchproducts['id']; ?>&category_id=<?php echo $searchproducts['category_id']; ?>">
                                    <img src="../upload/<?= $searchproducts['thumbnail'] ?>" alt="">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="index.php?action=product-detail&id=<?php echo $searchproducts['id']; ?>&category_id=<?php echo $searchproducts['category_id']; ?>" class="title link"><?php echo $searchproducts['title'] ?></a>
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