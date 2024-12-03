<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-body-wrapper">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Danh sách đơn hàng</h5>
                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table all-package order-table theme-table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Họ và tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Ghi chú</th>
                                                    <th>Ngày đặt hàng</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $order): ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($order['id']) ?></td>
                                                        <td><?= htmlspecialchars($order['fullname']) ?></td>
                                                        <td><?= htmlspecialchars($order['phone_number']) ?></td>
                                                        <td><?= htmlspecialchars($order['Payment']) ?></td>
                                                        <td><?= number_format((float)$order['total_money'], 0, ',', '.') ?>đ</td>
                                                        <td><?= htmlspecialchars($order['note']) ?></td>
                                                        <td><?= htmlspecialchars($order['oders_date']) ?></td>
                                                        <td>
                                                            <a href="?action=orderdetail&odersid=<?= htmlspecialchars($order['id']) ?>"> <i class="ri-eye-line"></i></a>
                                                        </td>
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
</div>