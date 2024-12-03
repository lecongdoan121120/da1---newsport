       <div class="page-wrapper compact-wrapper" id="pageWrapper">
           <div class="page-body-wrapper">
               <div class="page-body">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-sm-12">
                               <div class="card card-table">
                                   <div class="card-body">

                                       <div>
                                           <div class="table-responsive">
                                               <div class="title-header option-title">
                                                   <h5>Thông tin khách hàng</h5>
                                               </div>

                                               <h6>Họ và tên : <?= $orders['fullname'] ?></h6><br>
                                               <h6>Email : <?= $orders['email'] ?></h6><br>
                                               <h6>Số điện thoại : <?= $orders['phone_number'] ?></h6><br>
                                               <h6>Địa chỉ : <?= $orders['adress'] ?></h6><br>

                                               <table class="table all-package order-table theme-table" id="table_id">
                                                   <div class="title-header option-title">
                                                       <h5>Danh sách sản phẩm</h5>
                                                   </div>
                                                   <thead>
                                                       <tr>
                                                           <th>#</th>
                                                           <th>Tên sản phẩm</th>
                                                           <th>Ảnh</th>
                                                           <th>Giá</th>
                                                           <th>Số lượng</th>
                                                           <th>Tổng tiền</th>

                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                       <?php foreach ($orderDetails as $detail): ?>
                                                           <tr data-bs-toggle="offcanvas" href="#order-details">
                                                               <td><?= $detail['id']  ?></td>
                                                               <td><?= $detail['product_name']  ?></td>
                                                               <td>
                                                                   <img src="<?= $detail['product_thumbnail']  ?>" style="width:100px" alt="">

                                                               </td>

                                                               <td><?= $detail['price']  ?></td>
                                                               <td><?= $detail['quantity']  ?></td>
                                                               <td><?= ($detail['price'] * $detail['quantity']) ?> VND</td>
                                                           </tr>
                                                       <?php endforeach; ?>
                                                   </tbody>
                                               </table>

                                               <div class="title-header option-title">
                                                   <h5>Cập nhật trạng thái đơn hàng</h5>
                                               </div>
                                               <form method="POST" action="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
                                                   <input type="hidden" name="order_id" value="<?= htmlspecialchars($orders['id']) ?>">
                                                   <select name="status" class="form-select">
                                                       <?php
                                                        if ($orders['status'] === 'Chờ xác nhận') { ?>
                                                           <option value="Chờ xác nhận" selected>Chờ xác nhận</option>
                                                           <option value="Đang giao">Đang giao</option>
                                                           <option value="Đã giao">Đã giao</option>
                                                           <option value="Hủy">Hủy</option>
                                                       <?php
                                                        } elseif ($orders['status'] === 'Đang giao') { ?>
                                                           <option value="Đang giao" selected>Đang giao</option>
                                                           <option value="Đã giao">Đã giao</option>
                                                           <option value="Hủy">Hủy</option>
                                                       <?php
                                                        } elseif ($orders['status'] === 'Đã giao') { ?>
                                                           <option value="Đã giao" selected>Đã giao</option>
                                                       <?php
                                                        } elseif ($orders['status'] === 'Hủy') { ?>
                                                           <option value="Hủy" selected>Hủy</option>
                                                       <?php } ?>
                                                   </select>
                                                   <button type="submit" class="btn btn-primary btn-sm mt-2">Cập nhật</button>
                                               </form>


                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>