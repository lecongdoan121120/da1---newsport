       <div class="page-wrapper compact-wrapper" id="pageWrapper">
           <div class="page-body-wrapper">
               <div class="page-body">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-sm-12">
                               <div class="card card-table">
                                   <div class="card-body">
                                       <div class="title-header option-title">
                                           <h5>Chi tiết đơn hàng</h5>
                                       </div>
                                       <div>
                                           <div class="table-responsive">
                                               <table class="table all-package order-table theme-table" id="table_id">
                                                   <thead>
                                                       <tr>
                                                           <th>Id</th>
                                                           <th>Tên sản phẩm</th>
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

                                                               <td><?= $detail['price']  ?></td>
                                                               <td><?= $detail['quantity']  ?></td>
                                                               <td><?= ($detail['price'] * $detail['quantity']) ?> VND</td>


                                                           </tr>
                                                       <?php endforeach; ?>
                                                   </tbody>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           