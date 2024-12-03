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
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th scope="col">Id</th>
                                   <th scope="col">Sản phẩm</th>
                                   <th scope="col">Ảnh</th>
                                   <th scope="col">Giá</th>
                                   <th scope="col">Số lượng</th>
                                   <th scope="col">Tổng tiền</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php foreach ($orderDetails as $detail): ?>
                                   <tr>
                                       <th scope="row"><?= ($detail['id']) ?></th>
                                       <td><?= ($detail['product_name']) ?></td>
                                       <td>
                                           <img src="<?= htmlspecialchars($detail['product_thumbnail']) ?>"
                                               alt="<?= htmlspecialchars($detail['product_name']) ?>"
                                               style="width: 80px; height: auto; border-radius: 5px;">
                                       </td>
                                       <td><?= ($detail['price']) ?> VND</td>
                                       <td><?= ($detail['quantity']) ?></td>
                                       <td><?= ($detail['price'] * $detail['quantity']) ?> VND</td>
                                   </tr>
                           </tbody>
                       <?php endforeach; ?>
                       </table>
                   </div>
               </div>
   </section>