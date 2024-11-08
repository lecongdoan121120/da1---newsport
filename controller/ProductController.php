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
        include 'view/home.php';
    }
    // Hiển thị sản phẩm chi tiết
    function productDetail($id, $category_id)
    {
        $product = $this->productmodel->getProductdetail($id);
        $category = $this->productmodel->getAllcategory();
        $view = $this->productmodel->updateView($id);
        $loadProductview = $this->productmodel->loadProductview();
        $loadProductcategorys = $this->productmodel->loadProductcategory($id, $category_id);
        include 'view/product-detail.php';
    }
    // Hiện thị sản phẩm theo danh mục
    function productCategory($id)
    {
        $productcategory = $this->productmodel->getProductcategory($id);
        $category = $this->productmodel->getAllcategory();
        $showCatogeryproduct = $this->productmodel->showProductcategory($id);
        include 'view/product-category.php';
    }
    // Hiển thị trang sản phẩm
    function product(){
        $category = $this->productmodel->getAllcategory();
        $product = $this->productmodel->getAllproduct();
        include 'view/product.php';
    }
}
