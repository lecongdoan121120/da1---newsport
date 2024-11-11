<!-- TRANG INDEX DÙNG ĐỂ THAO TÁC -->
<?php
session_start();
include "./controller/ProductController.php";
$action = $_GET['action'] ?? 'home';
$productcontroller = new ProductController;

match ($action) {
  'home' => $productcontroller->showAll(),
  'product-detail' => $productcontroller->productDetail($_GET['id'], $_GET['category_id']),
  'product-category' => $productcontroller->productCategory($_GET['id']),
  'product' => $productcontroller->product(),
  default => throw new Exception("Action not recognized")
};
?>