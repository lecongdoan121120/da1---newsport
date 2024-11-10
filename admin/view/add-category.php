<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Danh Mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #f4f4f4;
        }

        .actions button {
            background-color: #007bff;
            margin-right: 5px;
        }

        .actions button.delete {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Quản Lý Danh Mục</h2>

        <!-- Form Thêm Danh Mục -->
        <form action="?action=category" method="POST">
            <h3>Thêm Danh Mục Mới</h3>
            <div class="form-group">
                <label for="name">Tên Danh Mục:</label>
                <input type="text" id="name" name="namecategory" required>
            </div>
            <button type="submit" name="addcategoryy">Thêm Danh Mục</button>
        </form>


        <!-- Danh Sách Danh Mục -->
        <h3>Danh Sách Danh Mục</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="actions">
                        <button type="button" onclick="editCategory(1)">Sửa</button>
                        <button type="button" class="delete" onclick="deleteCategory(1)">Xóa</button>
                    </td>
                </tr>

                <!-- Thêm các danh mục khác -->
            </tbody>
        </table>
    </div>

    <script>
        // Hàm chỉnh sửa danh mục (mở form chỉnh sửa, giả sử có ID danh mục)
        function editCategory(id) {
            alert('Chỉnh sửa danh mục có ID: ' + id);
            // Có thể mở form chỉnh sửa hoặc chuyển đến trang chỉnh sửa danh mục
        }

        // Hàm xóa danh mục
        function deleteCategory(id) {
            if (confirm('Bạn có chắc muốn xóa danh mục này?')) {
                alert('Đã xóa danh mục có ID: ' + id);
                // Xử lý xóa danh mục qua Ajax hoặc chuyển tới trang xóa danh mục
            }
        }
    </script>

</body>

</html>