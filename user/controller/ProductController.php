<?php
include 'model/ProductModel.php';

class ProductController
{
    public $productmodel;

    function __construct()
    {
        $this->productmodel = new ProductModel();
    }
     // Hiển thị tất cả sản phẩm
    function showAll()
    {
        $products = $this->productmodel->getAllproduct();
        $category = $this->productmodel->getAllcategory();
        $loadProductview = $this->productmodel->loadProductview();
        include 'view/header.php';
        include 'view/home.php';
        include 'view/footer.php';
       
    }
    // Hiển thị sản phẩm chi tiết
    function productDetail($id, $category_id)
    {
        $product = $this->productmodel->getProductdetail($id);
        $category = $this->productmodel->getAllcategory();
        $loadProductcategorys = $this->productmodel->loadProductcategory($id, $category_id);
        $view = $this->productmodel->updateView($id);
        include 'view/header.php';  
        include 'view/product-detail.php';
    }
    // Hiện thị sản phẩm theo danh mục
    function productCategory($id)
    {
        $productcategory = $this->productmodel->getProductcategory($id);
        $category = $this->productmodel->getAllcategory();
        $showCatogeryproduct = $this->productmodel->showProductcategory($id);
        include 'view/header.php';  
        include 'view/product-category.php';
    }
    // Hiển thị trang sản phẩm
    function product()
    {
        // Lấy danh mục và sản phẩm
        $category = $this->productmodel->getAllcategory();
        $product = $this->productmodel->getAllproduct();

        // Bao gồm các view cần thiết
        include 'view/header.php';
        include 'view/product.php';
        include 'view/footer.php';
    }
    function search()
    {
        // Kiểm tra xem có từ khóa tìm kiếm từ POST hay không
        if (isset($_POST['keyword']) ) {
            // Lấy từ khóa tìm kiếm từ POST
            $keyword = $_POST['keyword'];
            $searchproduct = $this->productmodel->searchProduct($keyword);
        }
           

        // Bao gồm các view cần thiết
        include 'view/header.php';
        include 'view/search.php';
        include 'view/footer.php';
    }


}
