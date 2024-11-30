<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php?action=editCategory&id=<?= $category['id'] ?>" method="POST">
        <label for="name">Tên danh mục:</label>
        <input type="text" id="name" name="name" value="<?= $category['name'] ?>"><br><br>
        <input type="hidden" name="id" value="<?= $category['id'] ?>">
        <button action="index.php?action=homeCategory" type=" submit">Cập nhật</button>
    </form>
</body>
</html>