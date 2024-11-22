<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>

<body>
    <h1>Giỏ hàng của bạn</h1>
    <?php if (!empty($cart)): ?>
        <table border="1">
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($cart as $id => $item): ?>
                <tr>
                <tr>
                    <td><?= htmlspecialchars($item['title'] ?? 'Không xác định') ?></td> <!-- Hiển thị tên sản phẩm -->
                    <td><?= number_format((float)($item['price'] ?? 0), 0, ',', '.') ?>đ</td> <!-- Hiển thị giá sản phẩm -->
                    <td><?= (int)($item['quantity'] ?? 0) ?></td> <!-- Hiển thị số lượng sản phẩm -->
                    <td><?= number_format((float)($item['price'] ?? 0) * (int)($item['quantity'] ?? 0), 0, ',', '.') ?>đ</td> <!-- Thành tiền -->
                </tr>
            <?php endforeach; ?>
        </table>
        <h2>Tổng tiền: <?= number_format($this->cartModel->getTotalPrice(), 0, ',', '.') ?>đ</h2> <!-- Hiển thị tổng tiền -->
    <?php else: ?>
        <p>Giỏ hàng của bạn đang trống!</p>
    <?php endif; ?>
</body>

</html>