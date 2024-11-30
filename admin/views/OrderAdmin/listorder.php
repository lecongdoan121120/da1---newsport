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
                                                    <th>Id</th>
                                                    <th>Họ và tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tổng tiền</th>
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
                                                        <td>
                                                            <form method="POST" action="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
                                                                <input type="hidden" name="order_id" value="<?= htmlspecialchars($order['id']) ?>">
                                                                <select name="status" class="form-select">
                                                                    <option value="Chờ xác nhận" <?= $order['status'] === 'Chờ xác nhận' ? 'selected' : '' ?>>Chờ xác nhận</option>
                                                                    <option value="Đang giao" <?= $order['status'] === 'Đang giao' ? 'selected' : '' ?>>Đang giao</option>
                                                                    <option value="Đã giao" <?= $order['status'] === 'Đã giao' ? 'selected' : '' ?>>Đã giao</option>
                                                                    <option value="Hủy" <?= $order['status'] === 'Hủy' ? 'selected' : '' ?>>Hủy</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-primary btn-sm mt-2">Cập nhật</button>
                                                            </form>
                                                        </td>
                                                        <td><?= number_format((float)$order['total_money'], 0, ',', '.') ?>đ</td>
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