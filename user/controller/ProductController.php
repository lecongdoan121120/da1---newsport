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
        $comments = $this->productmodel->getCommentsByProduct($id);
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

    public function addComment()
    {
        if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
            echo "Bạn cần đăng nhập để bình luận.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_user = $_SESSION['user']['id']; // Lấy ID người dùng từ session
            $id_product = $_POST['id_product'] ?? null; // Lấy ID sản phẩm từ POST
            $content_comment = $_POST['content_comment'] ?? null; // Lấy nội dung bình luận từ POST

            // Kiểm tra dữ liệu đầu vào
            if (!$id_product || !$content_comment ) {
                echo "Thiếu dữ liệu, vui lòng thử lại!";
                return;
            }

            // Gọi phương thức thêm bình luận
            $isAdded = $this->productmodel->addComment($id_user, $id_product, $content_comment);
            if ($isAdded) {
                echo "Bình luận đã được thêm thành công!";
                $uri = $_SESSION['URI'];

                header('Location:' . $uri);
// Quay lại trang sản phẩm chi tiết
                exit;
            } else {
                echo "Có lỗi xảy ra, vui lòng thử lại.";
            }
        }
    }
}
