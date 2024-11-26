<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once "header.php" ?>
    <h3>Danh Sách Danh Mục</h3>

    <table border="1">
        <tr>
            <th>Category Id</th>
            <th> Category Name</th>
            <th>
                <a href="index.php?action=addCategory">Thêm</a>
            </th>
        </tr>

        <?php foreach ($categorys as $category) : ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['name'] ?></td>
                <td>
                    <a href="index.php?action=editCategory&id=<?= $category['id'] ?>">Sửa</a>
                    <a onclick="return confirm ('Bạn chắc chắn xóa không ?')" href="index.php?action=deleteCategory&id=<?= $category['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>