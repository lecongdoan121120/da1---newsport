<?php
require_once 'model/ProductModel.php';

class ProductController
{
    private $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }
    public function contact()
    {
        $category = $this->ProductModel->getAllcategory();
        include 'view/header.php';
        include 'view/contact.php';
        include 'view/footer.php';
    }
    public function about()
    {
        $category = $this->ProductModel->getAllcategory();
        include 'view/header.php';
        include 'view/about.php';
        include 'view/footer.php';
    }
    public function blog()
    {
        $category = $this->ProductModel->getAllcategory();
        include 'view/header.php';
        include 'view/blog.php';
        include 'view/footer.php';
    }
    public function showAll()
    {
        $products = $this->ProductModel->getAllproduct();
        $category = $this->ProductModel->getAllcategory();
        include 'view/header.php';
        include 'view/home.php';
        include 'view/footer.php';
    }
    public function productDetail($id, $category_id)
    {
        $product = $this->ProductModel->getProductdetail($id);
        $category = $this->ProductModel->getAllcategory();
        $comments = $this->ProductModel->getCommentsByProduct($id);
        $loadProductcategorys = $this->ProductModel->loadProductcategory($id, $category_id);

        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        include 'view/header.php';
        include 'view/Product/product-detail.php';
        include 'view/footer.php';
    }
    public function productCategory($id)
    {
        $productcategory = $this->ProductModel->getProductcategory($id);
        $category = $this->ProductModel->getAllcategory();
        $showCatogeryproduct = $this->ProductModel->showProductcategory($id);
        include 'view/header.php';
        include 'view/Product/product-category.php';
        include 'view/footer.php';
    }

    public  function product()
    {
        $category = $this->ProductModel->getAllcategory();

        $itemsPerPage = 12;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($currentPage - 1) * $itemsPerPage;

        $products = $this->ProductModel->getProducts($itemsPerPage, $offset);
        $totalProducts = $this->ProductModel->getTotalProducts();
        $totalPages = ceil($totalProducts / $itemsPerPage);

        include 'view/header.php';
        include 'view/Product/product.php';
        include 'view/footer.php';
    }

    public function search()
    {
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
            $searchproduct = $this->ProductModel->searchProduct($keyword);
        }
        $category = $this->ProductModel->getAllcategory();

        include 'view/header.php';
        include 'view/Product/search.php';
        include 'view/footer.php';
    }
    public function addComment()
    {
        if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
            include 'view/header.php';
            include 'view/User/login.php';
            include 'view/footer.php';
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_user = $_SESSION['user']['id'];
            $id_product = $_POST['id_product'] ?? null;
            $content_comment = $_POST['content_comment'] ?? null;
            $addcomment = $this->ProductModel->addComment($id_user, $id_product, $content_comment);
            if ($addcomment) {

                $uri = $_SESSION['URI'];
                header('Location:' . $uri);
                exit;
            } else {
                echo "Có lỗi xảy ra, vui lòng thử lại.";
            }
        }
    }
}
