<?php
session_start();

const ROOT_DIR = __DIR__ . "/";
const ROOT_URL = "http://localhost:3000/admin/index.php";

require_once "../config/database.php";
require_once "./models/CategoryModel.php";
require_once "./models/ProductModel.php";
require_once "./controllers/CategoryController.php";
require_once "./controllers/ProductController.php";

$CategoryController = new CategoryController;
$ProductController = new ProductController;
$action = $_GET['action'] ?? "";

switch ($action) {
    case "":
        $CategoryController->list();
        break;
    case "homeCategory":
        $CategoryController->list();
        break;
    case "addCategory":
        $CategoryController->add();
        break;
    case "storeCategory":
        $CategoryController->store();
        break;
    case "editCategory":
        $CategoryController->edit();
        break;
    case "deleteCategory":
        $CategoryController->delete();
        break;
    case "homeProduct":
        $ProductController->list();

    case "addProduct":
        $ProductController->add();
        break;

    case "storeProduct":
        $ProductController->store();
        break;
    case "deleteProduct":
        $ProductController->delete();
        break;
    default:
        echo "404 NOT FOUND";
        break;
}
