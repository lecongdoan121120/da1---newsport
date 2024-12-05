<!-- TRANG INDEX DÙNG ĐỂ THAO TÁC -->
<?php
session_start();
require_once "./controller/ProductController.php";
require_once "./controller/CartController.php";
require_once "./controller/UserController.php";
require_once "./controller/OrderController.php";
$action = $_GET['action'] ?? 'home';
$ProdutController = new ProductController;
$CartController = new CartController;
$UserController = new UserController;
$OrderController = new OrderController;
switch ($action) {
  case 'home':
    $ProdutController->showAll();                        
    break;
  case 'product':
    $ProdutController->product();
    break;
  case 'product-detail':
    $ProdutController->productDetail($_GET['id'], $_GET['category_id']);
    break;
  case 'product-category':
    $ProdutController->productCategory($_GET['id']);
    break;
  case 'search':
    $ProdutController->search();
    break;
  case 'comment':
    $ProdutController->addComment();
    break;
  case 'addToCart':
    $CartController->addToCart();
    break;
  case 'viewCart':
    $CartController->viewCart();
    break;
    case 'deletecart' :
      $CartController->deleteProductInCart();
  case 'register':
    $UserController->register();
    break;
  case 'login':
    $UserController->login();
    break;
  case 'logout':
    $UserController->logout();
    break;
  case 'inforuser':
    $UserController->inforuser();
    break;
  case 'checkout':
    $OrderController->checkout();
    break;
  case 'pay':
    $OrderController->pay();
    break;
  case 'listoders':
    $OrderController->listorder();
    break;
  case 'odersdetail':
    $OrderController->showOrderDetail($_GET['odersid']);
    break;
  case 'contact' :
    $ProdutController->contact();
    break;
  case 'about':
    $ProdutController->about();
    break;
  case 'blog':
    $ProdutController->blog();
    break;
}
?>