<?php
// require_once "../models/ProductModel.php";
class ProductController
{
    public function list()
    {
        $products = new ProductModel();
        $data = $products->all();
        include 'views/sidebar.php';
        include 'views/listProduct.php';
    }
    public function add()
    {
        $categorys = (new CategoryModel)->all();
        include 'views/sidebar.php';
        include 'views/addProduct.php';     
    }
    public function store()
    {
        $product = $_POST;
        // var_dump($product);

        $upload = '';
        $file = $_FILES['thumbnail'];
        if ($file['size'] > 0) {
            $upload = '../upload/' . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $upload);
        }
        //đưa ảnh vào mảng
        $product['thumbnail'] = $upload;
        (new ProductModel)->add($product);


        $_SESSION['mesage'] = "Thêm dữ liệu thàn công";
        header("location:" . ROOT_URL . "?action=listProduct");
        die;
    }
    public function delete()
    {
        $id = $_GET['id'];
        (new ProductModel)->delete($id);
        $_SESSION['message'] = "Xóa sản phẩm thành công";
        header("location: index.php?action=listProduct");
        die;
    }
}
