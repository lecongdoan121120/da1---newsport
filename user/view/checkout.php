<?php

$user = $_SESSION['user'];
$cart = $_SESSION['cart'] ?? [];
$total_price = array_reduce($cart, function ($sum, $item) {
    return $sum + ($item['price'] * $item['quantity']);
}, 0);
?>

<h1>Thông tin thanh toán</h1>

<form action="?action=processCheckout" method="POST">
    <label>Họ và tên:</label>
    <input type="text" name="fullname" value="<?= htmlspecialchars($user['fullname']) ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

    <label>Số điện thoại:</label>
    <input type="text" name="phone_number" value="<?= htmlspecialchars($user['phone_number']) ?>" required>

    <label>Địa chỉ giao hàng:</label>
    <textarea name="adress" required><?= htmlspecialchars($user['adress']) ?></textarea>

    <label>Ghi chú:</label>
    <textarea name="note"></textarea>

    <h2>Tổng tiền: <?= number_format($total_price) ?> VND</h2>
    <h2>Chi tiết giỏ hàng</h2>
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
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['title']) ?></td>
                    <td><?= number_format($item['price']) ?> VND</td>
                    <td><?= $item['quantity'] ?></td>
                    <td><?= number_format($item['price'] * $item['quantity']) ?> VND</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button type="submit">Xác nhận thanh toán</button>
</form>