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
                    <td><?= htmlspecialchars($item['title']) ?></td> <!-- Hiển thị tên sản phẩm -->
                    <td><?= number_format($item['price'], 0, ',', '.') ?>đ</td> <!-- Hiển thị giá sản phẩm -->
                    <td><?= $item['quantity'] ?></td>
                    <td><?= number_format($item['price'] * $item['quantity'], 0, ',', '.') ?>đ</td> <!-- Thành tiền -->
                </tr>
            <?php endforeach; ?>
        </table>
        <h2>Tổng tiền: <?= number_format($this->cartModel->getTotalPrice(), 0, ',', '.') ?>đ</h2> <!-- Hiển thị tổng tiền -->
    <?php else: ?>
        <p>Giỏ hàng của bạn đang trống!</p>
    <?php endif; ?>
</body>

</html>