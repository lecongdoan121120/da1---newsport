<?php
// require_once "../models/CategoryModel.php";
class CategoryController
{
    // Hiển thị danh sách các danh mục

    public function dashboard() {

      include 'views/sidebar.php';
    }
    public function list()
    {
        $message = $_SESSION['mesage'] ?? ''; 
        unset($_SESSION['mesage']);

        // Lấy tất cả danh mục từ cơ sở dữ liệu
        $data = new CategoryModel();
        $categorys = $data->all();

        include 'views/sidebar.php';
        include 'views/CategoryAdmin/homeCategory.php';
    }

    // Thêm danh mục mới
    public function add()
    {   

        include 'views/CategoryAdmin/addCategory.php';
        include 'views/sidebar.php';
        
    }
    public function store()
    {
        // Lấy dữ liệu từ form
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
            $name = $_POST['name'];

            // Chuẩn bị mảng dữ liệu cho model
            $data = [':name' => $name];

            // Gọi hàm add của model
            $categoryModel = new CategoryModel();
            $categoryModel->add($data);

            // Chuyển hướng sau khi thêm thành công
            header("Location: index.php?action=homeCategory");
            exit;
        } else {
            // Trường hợp không có dữ liệu hợp lệ
            echo "Dữ liệu không hợp lệ!";
        }
    }


    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;

        // Hiển thị trang form thêm mới 
            (new CategoryModel)->update($data, $data['id']);
        }
        $id = $_GET['id'];
        $category = (new CategoryModel)->find_One($id);

        include 'views/sidebar.php';
        include 'views/CategoryAdmin/editCategory.php';
    }

    // Xóa danh mục
    public function delete()
    {
        $id = $_GET['id'];

        if ((new CategoryModel)->delete($id)) {
            $_SESSION['mesage'] = "Xóa dữ liệu thành công";
        } else {
            $_SESSION['mesage'] = "Có lỗi xảy ra khi xóa dữ liệu";
        }

        header("location: index.php?action=homeCategory");
        die;
    }
}
