<?php
require_once 'model/ProductModel.php';

class ProductController
{
    private $productmodel;

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

        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        include 'view/header.php';
        include 'view/product-detail.php';
        include 'view/footer.php';
    }
    // Hiện thị sản phẩm theo danh mục
    function productCategory($id)
    {
        $productcategory = $this->productmodel->getProductcategory($id);
        $category = $this->productmodel->getAllcategory();
        $showCatogeryproduct = $this->productmodel->showProductcategory($id);
        include 'view/header.php';
        include 'view/product-category.php';
        include 'view/footer.php';
    }
    // Hiển thị trang sản phẩm
    function product()  
    {
        // Lấy danh mục và sản phẩm
        $category = $this->productmodel->getAllcategory();
        // Cấu hình phân trang
        $itemsPerPage = 12;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($currentPage - 1) * $itemsPerPage;

        // Lấy dữ liệu
        $products = $this->productmodel->getProducts($itemsPerPage, $offset);
        $totalProducts = $this->productmodel->getTotalProducts();
        $totalPages = ceil($totalProducts / $itemsPerPage);


        // Bao gồm các view cần thiết
        include 'view/header.php';
        include 'view/product.php';
        include 'view/footer.php';
    }
    function search()
    {
        // Kiểm tra xem có từ khóa tìm kiếm từ POST hay không
        if (isset($_POST['keyword'])) {
            // Lấy từ khóa tìm kiếm từ POST
            $keyword = $_POST['keyword'];
            $searchproduct = $this->productmodel->searchProduct($keyword);
          
        }
        $category = $this->productmodel->getAllcategory();

        // Bao gồm các view cần thiết
        include 'view/header.php';
        include 'view/search.php';
        include 'view/footer.php';
    }
    
}
