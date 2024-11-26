<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once "header.php" ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>category_id</th>
            <th>title</th>
            <th>price</th>
            <th>discount</th>
            <th>thumbnail</th>
            <th>description</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>
                <a href="index.php?action=addProduct">Thêm</a>
            </th>
        </tr>

        <?php foreach ($data as $product) : ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['category_id'] ?></td>
                <td><?= $product['title'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['discount'] ?></td>
                <td>
                    <img src="<?= $product['thumbnail'] ?>" alt="" width="60">
                </td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['created_at'] ?></td>
                <td><?= $product['updated_at'] ?></td>
                <td>
                    <a href="index.php?action=editProduct&id=<?= $product['id'] ?>">Sửa</a>
                    <a onclick="return confirm ('Bạn chắc chắn xóa không ?')" href="index.php?action=deleteProduct&id=<?= $product['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>