<?php
session_start();
include "./controller/ProductController.php";
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$productcontroller = new ProductController;
switch ($action) {
  case "home":
    $productcontroller->showAll();
    break;

  case "product-detail":
    $id = $_GET['id'];
    $category_id = $_GET['category_id'];
    $productcontroller->productDetail($id, $category_id);
    break;
  case "product-category":
    $id = $_GET['id'];
    $productcontroller->productCategory($id);
    break;
  case "product":
    $productcontroller->product();
    break;
}    
