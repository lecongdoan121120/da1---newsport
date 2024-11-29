<?php
session_start();

const ROOT_DIR = __DIR__ . "/";
const ROOT_URL = "http://localhost:3000/admin/index.php";
if ($_SESSION['user']['role'] != 1) { // Không phải admin
    echo "Access denied! You do not have permission to access this page.";
    exit();
}

require_once "../config/database.php";
require_once "./models/CategoryModel.php";
require_once "./models/ProductModel.php";
require_once "./models/CommentModel.php";
require_once "./models/UserModel.php";
require_once "./controllers/UserController.php";
require_once "./controllers/CategoryController.php";
require_once "./controllers/CommentController.php";
require_once "./controllers/ProductController.php";

$CategoryController = new CategoryController;
$ProductController = new ProductController;
$CommentController = new CommentController;
$UserController = new UserController;
$action = $_GET['action'] ?? "dashboard";

switch ($action) {
    case 'dashboard':
        $CategoryController->dashboard();
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
    case "listProduct":
        $ProductController->list();
        break;
    case "addProduct":
        $ProductController->add();
        break;

    case "storeProduct":
        $ProductController->store();
        break;
    case "deleteProduct":
        $ProductController->delete();
        break;
    case "comment":
        $CommentController->getcomment();
        break;
    case 'delete':
        $id = $_GET['id'];
        $CommentController->delete($id);
        break;
        case 'listuser' :
            $UserController->getuser();
            break;
        case 'adduser' :
            $UserController->create();
            break;
  
    case 'deleteuser':
        $UserController->delete();
        break;
   
    default:
        echo "404 NOT FOUND";
        break;
}
