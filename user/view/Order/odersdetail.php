   <section class="flat-spacing-11">
       <div class="container">
           <div class="row">
               <div class="col-lg-3">
                   <div class="wrap-sidebar-account">
                       <ul class="my-account-nav">
                           <li><a href="?action=inforuser" class="my-account-nav-item ">Trang tài khoản</a></li>
                           <li><a href="?action=listoders" class="my-account-nav-item active"> Đơn hàng đã mua</a></li>
                           <li><a href=" ?action=logout" class="my-account-nav-item">Đăng xuất</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-9">
                   <div class="wd-form-order">
                       <?php foreach ($orderDetails as $detail): ?>
                           <div class="tf-grid-layout md-col-2 gap-15">
                               <div class="item">
                                   <div class="text-2 text_black-2">Sản phẩm</div>
                                   <div class="text-2 mt_4 fw-6"><?= htmlspecialchars($detail['product_name']) ?></div>
                               </div>
                               <div class="item">
                                   <div class="text-2 text_black-2">Giá</div>
                                   <div class="text-2 mt_4 fw-6"><?= number_format($detail['price']) ?> VND</div>
                               </div>
                               <div class="item">
                                   <div class="text-2 text_black-2">Số lượng</div>
                                   <div class="text-2 mt_4 fw-6"><?= htmlspecialchars($detail['quantity']) ?></div>
                               </div>
                               <div class="item">
                                   <div class="text-2 text_black-2">Tổng tiền</div>
                                   <div class="text-2 mt_4 fw-6"><?= number_format($detail['price'] * $detail['quantity']) ?> VND</div>
                               </div>
                           <?php endforeach; ?>
                           </div>
                   </div>
               </div>
           </div>
   </section>