    <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">Đơn hàng của tôi </div>
        </div>
    </div>
    <?php if (empty($orders)) { ?>
        <section class="flat-spacing-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wrap-sidebar-account">
                            <ul class="my-account-nav">
                                <li><a href="?action=inforuser" class="my-account-nav-item ">Tài khoản</a></li>
                                <li><a href="?action=listoders" class="my-account-nav-item active">Đơn hàng đã mua</a></li>
                                <li><a href="?action=logout" class="my-account-nav-item">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h6 style="text-align: center; margin-top:70px;color:red">Bạn chưa có đơn hàng nào.</h6>
                    </div>
                </div>
        </section>
    <?php } else { ?>
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
                        <div class="my-account-content account-order">
                            <div class="wrap-account-order">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="fw-6">Order</th>
                                            <th class="fw-6">Date</th>
                                            <th class="fw-6">Status</th>
                                            <th class="fw-6">Total</th>
                                            <th class="fw-6">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order) { ?>
                                            <tr class="tf-order-item">
                                                <td><?= $order['id'] ?></td>
                                                <td><?= $order['oders_date'] ?></td>
                                                <td><?= $order['status'] ?></td>
                                                <td><?= number_format($order['total_money'], 0, ',', '.') ?> VND</td>
                                                <td>
                                                    <a href="index.php?action=odersdetail&odersid=<?= $order['id'] ?>" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                                        <span>Xem</span>
                                                    </a>

                                                    <?php if ($order['status'] !== 'Đang giao' && $order['status'] !== 'Đã giao'): ?>
                                                        <form method="POST" action="<?= ($_SERVER['REQUEST_URI']) ?>">
                                                            <input type="hidden" name="order_id" value="<?= ($order['id']) ?>">
                                                            <input type="hidden" name="status" value="Hủy">
                                                            <button type="submit" class="btn btn-danger" style="width:81px;height:42px;border-radius:0%;margin-top:5px">Hủy</button>
                                                        </form>
                                                    <?php else: ?>
                                                        <p style="margin-top:10px;color:red">
                                                            <?= $order['status'] === 'Đang giao' ? 'Đơn hàng đang được giao, không thể hủy!' : 'Đơn hàng đã giao, không thể hủy!' ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- page-cart -->