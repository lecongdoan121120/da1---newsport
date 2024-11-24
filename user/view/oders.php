<h1>Danh sách hóa đơn</h1>

<?php if (empty($orders)) { ?>
    <p>Bạn chưa có hóa đơn nào.</p>
<?php } else { ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th>Tổng tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?= htmlspecialchars($order['id'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($order['oders_date'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($order['status'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= number_format($order['total_money'], 0, ',', '.') ?> VND</td>
                    <td>
                        <a href="index.php?action=viewOrder&id=<?= $order['id'] ?>">Xem chi tiết</a> |
                        <a href="index.php?action=cancelOrder&id=<?= $order['id'] ?>"
                            onclick="return confirm('Bạn có chắc muốn hủy đơn hàng này?')">Hủy</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>