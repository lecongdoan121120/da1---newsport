<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nhập Dữ Liệu</title>
</head>

<body>
    <h2>Form Nhập Dữ Liệu</h2>
    <form action="index.php?action=storeProduct" method="POST" enctype="multipart/form-data">

        <label for="category_id">Category</label><br>
        <select name="category_id" id="">
            <?php foreach ($categorys as $category) : "" ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach ?>
        </select><br><br>

        <label for="title">Tiêu Đề:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="price">Giá:</label><br>
        <input type="number" id="price" name="price"  required><br><br>

        <label for="discount">Giảm Giá:</label><br>
        <input type="number" id="discount" name="discount" step="0.1" required><br><br>

        <label for="thumbnail">Ảnh :</label><br>
        <input type="file" id="thumbnail" name="thumbnail"><br><br>

        <label for="description">Mô Tả:</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="status">Trạng Thái:</label><br><br>
        <input type="radio" name="status" value="1" checked>Đang kinh doanh
        <input type="radio" name="status" value="0" checked>Ngừng kinh doanh <br><br>


        <label for="created_at">Ngày Tạo:</label><br>
        <input type="datetime-local" id="created_at" name="created_at" required><br><br>

        <label for="updated_at">Ngày Cập Nhật:</label><br>
        <input type="datetime-local" id="updated_at" name="updated_at" required><br><br>

        <input type="submit" value="Thêm">
    </form>
</body>

</html>