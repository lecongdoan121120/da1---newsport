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
        // Lấy thông báo từ session và xóa nó sau khi hiển thị
        $message = $_SESSION['mesage'] ?? '';  // Lấy thông báo, nếu có
        unset($_SESSION['mesage']);  // Sau khi lấy xong, xóa thông báo khỏi session

        // Lấy tất cả danh mục từ cơ sở dữ liệu
        $data = new CategoryModel();
        $categorys = $data->all();

        include 'views/sidebar.php';
        include 'views/homeCategory.php';
    }

    // Thêm danh mục mới
    public function add()
    {    
        include 'views/addCategory.php';
        include 'views/sidebar.php';
        
    }
    public function store()
    {
        $category = $_POST;

        (new categoryModel)->add($category);
        $category = $_POST;
        // var_dump($data);
        (new categoryModel)->add($category);
        header("location: index.php?action=homeCategory");
        die;
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


        include 'views/editCategory.php';
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
