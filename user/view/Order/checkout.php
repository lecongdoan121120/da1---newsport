   <div class="tf-page-title">
       <div class="container-full">
           <div class="heading text-center">Thanh Toán</div>
       </div>
   </div>
   <?php

    $user = $_SESSION['user'];
    $cart = $_SESSION['cart'] ?? [];
    $total_price = array_reduce(
        $cart,
        function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        },
        0
    );
    ?>
   <section class="flat-spacing-11" style="height: 800px;">
       <div class="container">
           <div class="tf-page-cart-wrap layout-2">
               <form class="form-checkout" action="?action=pay" method="post">
                   <div style="width:650px">
                       <h5 class="fw-5 mb_20">Thông tin thanh toán</h5>
                       <fieldset class="fieldset">
                           <label for="last-name">Họ tên</label>
                           <input type="text" name="fullname" value="<?= $user['fullname'] ?>" required>
                       </fieldset>
                       <fieldset class="box fieldset">
                           <label for="address">Email</label>
                           <input type="email" name="email" value="<?= $user['email'] ?>" readonly>
                       </fieldset>
                       <fieldset class="box fieldset">
                           <label for="phone">Số điện thoại</label>
                           <input type="text" name="phone_number" value="<?= $user['phone_number']?>" required>
                       </fieldset>
                       <fieldset class="box fieldset">
                           <label for="adress">Địa chỉ</label>
                           <input type="text" name="adress" required value="<?= ($user['adress']) ?>">
                       </fieldset>
                       <fieldset class="box fieldset">
                           <label for="note">Ghi chú</label>
                           <textarea name="note" id="note"></textarea>
                       </fieldset>
                       </fieldset>
                   </div>
                   <div style="width: 700px;margin-left:680px;margin-top:-620px">
                       <h5 class="fw-5 mb_20">Chi tiết giỏ hàng</h5>
                       <div class="tf-page-cart-checkout widget-wrap-checkout">
                           <table class="tf-table-page-cart">
                               <thead>
                                   <tr>
                                       <th>Sản phẩm</th>
                                       <th>Ảnh</th>
                                       <th>Giá</th>
                                       <th>Số lượng</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach ($_SESSION['cart'] as $item): ?>
                                       <tr class="tf-cart-item file-delete">
                                           <td class="tf-cart-item_product">
                                               <div class="cart-info">
                                                   <?= $item['title'] ?>
                                               </div>
                                           </td>
                                           <td class="tf-cart-item_price" cart-data-title="Price">
                                               <div class="cart-price">
                                                   <img src="<?= $item['thumbnail'] ?>" alt="" style="width: 80px; height: auto; border-radius: 5px; ">
                                               </div>
                                           </td>
                                           <td class="tf-cart-item_price" cart-data-title="Price">
                                               <div class="cart-price">
                                                   <?= number_format((float)($item['price'] ?? 0), 0, ',', '.') ?>đ
                                               </div>
                                           </td>
                                           <td style="width: 100px;" class="tf-cart-item_quantity" cart-data-title="Quantity">
                                               <div class="cart-price">
                                                   <?= (int)($item['quantity'] ?? 0) ?>
                                               </div>
                                           </td>
                                       </tr>
                                   <?php endforeach; ?>
                               </tbody>
                           </table>
                           <div class="d-flex justify-content-between line pb_20">
                               <h6 class="fw-5">Tổng tiền</h6>
                               <h6 class="total fw-5"><?= number_format($total_price) ?> VND</h6>
                           </div>
                           <button type="submit" class="tf-btn radius-3 btn-fill btn-icon animate-hover-btn justify-content-center">Thanh toán</button>
                           <fieldset class="box fieldset">

                               <div>

                                   <label for="cash-on-delivery">Thanh toán khi nhận hàng<span><input type="radio" id="cash-on-delivery" name="payment_method" value="COD" required></span></label>
                               </div>
                               <div>

                                   <label for="bank-transfer">Chuyển khoản ngân hàng<span><input type="radio" id="bank-transfer" name="payment_method" value="BankTransfer"></span></label>
                               </div>
                           </fieldset>
                       </div>
                   </div>
               </form>
           </div>
       </div>
       </div>
       </div>
   </section>