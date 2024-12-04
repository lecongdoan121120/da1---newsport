<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Giỏ hàng</div>
    </div>
</div>

<section class="flat-spacing-11">
    <div class="container">
        <div class="tf-page-cart-wrap">
            <div class="tf-page-cart-item">
                <form>
                    <?php if (!empty($cart)): ?>
                        <table style="margin-left: 200px;" class="tf-table-page-cart">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart as $id => $item): ?>
                                    <tr class="tf-cart-item file-delete">
                                        <td>
                                            <div class="cart-info">
                                                <a href="" class="cart-title link"></a>
                                                <?= $item['title']?>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="<?= $item['thumbnail']?>"
                                               
                                                style="width: 80px; height: auto; border-radius: 5px; margin-left:100px">
                                        </td>
                                        <td class="tf-cart-item_price" cart-data-title="Price">
                                            <div class="cart-price">
                                                <?= number_format((float)($item['price'] ?? 0), 0, ',', '.') ?>đ
                                            </div>
                                        </td>

                                        <td class="tf-cart-item_quantity" cart-data-title="Quantity">
                                            <div class="cart-price">
                                                <?= (int)($item['quantity'] ?? 0) ?>
                                            </div>

                                        </td>
                                        <td class="tf-cart-item_total" cart-data-title="Total">
                                            <div class="cart-price  ">
                                                <?= number_format((float)($item['price'] ?? 0) * (int)($item['quantity'] ?? 0), 0, ',', '.') ?>đ
                                            </div>
                                        </td>
                                        <td>
                                            <a href="?action=deletecart&id=<?= $id ?>" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Xóa
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="cart-checkout-btn">
                            <a style="margin-left:626px" href="?action=checkout" class="tf-btn w-40 btn-fill animate-hover-btn radius-3 justify-content-center">
                                <span>Đến trang thanh toán</span>
                            </a>
                        </div>
                    <?php else: ?>
                        <h6 style="margin-left:570px;color:red">Giỏ hàng của bạn đang trống!</h6>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>