<?php
// require_once "../models/ProductModel.php";
class ProductController
{
    public function list()
    {
        $products = new ProductModel();
        $data = $products->all();
        $status = "
        1 => Đang kinh doanh";
        include 'views/sidebar.php';
        include 'views/ProductAdmin/listProduct.php';
    }
    public function add()
    {
        $categorys = (new CategoryModel)->all();
        include 'views/sidebar.php';
        include 'views/ProductAdmin/addProduct.php';
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
        $product['created_at'] = date('Y-m-d H:i:s');
        $product['thumbnail'] = $upload;
        (new ProductModel)->add($product);


        $_SESSION['mesage'] = "Thêm dữ liệu thàn công";
        header("location: ?action=listProduct");
        die;
    }
    // hàm hiển thị form cập nhật
    public function edit()
    {
        $category = (new CategoryModel)->all();
        $id = $_GET['id'];
        $product = (new ProductModel)->find_one($id);
        include 'views/ProductAdmin/editProduct.php';
        include 'views/sidebar.php';
    }
    public function update()
    {
        $data = $_POST;

        // lấy sản phẩm hiện tại
        $product = new ProductModel();
        $item  = $product->find_one($data['id']);

        $upload = $item['thumbnail'];
        $file = $_FILES['thumbnail'];
        if ($file['size'] > 0) {
            $upload = '../upload/' . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $upload);
        }
        //đưa ảnh vào mảng
        $data['thumbnail'] = $upload;

        // var_dump($data);
        $product->update($data, $data['id']);
        header("location: index.php?action=listProduct");
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
