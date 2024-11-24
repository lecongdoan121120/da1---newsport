<h1>Chi tiết hóa đơn #<?= $order['id'] ?></h1>

<p><strong>Họ và tên:</strong> <?= htmlspecialchars($order['fullname']) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($order['email']) ?></p>
<p><strong>Số điện thoại:</strong> <?= htmlspecialchars($order['phone_number']) ?></p>
<p><strong>Địa chỉ giao hàng:</strong> <?= htmlspecialchars($order['address']) ?></p>
<p><strong>Ngày đặt:</strong> <?= $order['oders_date'] ?></p>
<p><strong>Trạng thái:</strong> <?= $order['status'] ?></p>
<p><strong>Ghi chú:</strong> <?= htmlspecialchars($order['note']) ?></p>

<h2>Chi tiết sản phẩm</h2>
<table border="1">
    <thead>
        <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orderDetails as $detail): ?>
            <tr>
                <td><?= htmlspecialchars($detail['product_name']) ?></td>
                <td><?= number_format($detail['price']) ?> VND</td>
                <td><?= $detail['quantity'] ?></td>
                <td><?= number_format($detail['price'] * $detail['quantity']) ?> VND</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Tổng tiền: <?= number_format($order['total_money']) ?> VND</h2>
<a href="/orders">Quay lại danh sách hóa đơn</a>