<!-- TRANG INDEX DÙNG ĐỂ THAO TÁC -->
<?php
session_start();
include "./controller/ProductController.php";
$action = $_GET['action'] ?? 'home';
$productcontroller = new ProductController;
switch ($action) {
  case 'home':
    $productcontroller->showAll();
    break;

  case 'product-detail':
    $productcontroller->productDetail($_GET['id'], $_GET['category_id']);
    break;

  case 'product-category':
    $productcontroller->productCategory($_GET['id']);
    break;

  case 'product':
    $productcontroller->product();
    break;

  }

?>