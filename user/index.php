<!-- TRANG INDEX DÙNG ĐỂ THAO TÁC -->
<!DOCTYPE html>

<?php
session_start();
include "./controller/ProductController.php";
include "./controller/cartcontroller.php";
$action = $_GET['action'] ?? 'home';
$productcontroller = new ProductController;
$cartcontroller = new CartController;
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
  case 'search':
    // Gọi hàm product với từ khóa tìm kiếm
    $productcontroller->search();
    break;
  case 'product' :
    $productcontroller->product();

 case 'addToCart':
            $cartcontroller->addToCart();
            break;
        case 'viewCart':
            $cartcontroller->viewCart();
            break;




        }
?>  