<?php
require_once 'model/CartModel.php';
require_once 'model/ProductModel.php'; 

class CartController
{
    private $CartModel;

    public function __construct()
    {
        $this->CartModel = new CartModel();
    }
    public function addToCart()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $thumbnail = $_POST['thumbnail'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $this->CartModel->addToCart($id, $title,$thumbnail, $price, $quantity);
            $uri = $_SESSION['URI'];
            header('Location:' . $uri);
        }
    }
    public function viewCart()
    {
        $cart = $this->CartModel->getCart();
        $category = (new ProductModel)->getAllcategory();
        include 'view/header.php';
        include 'view/Cart/cartview.php';
        include 'view/footer.php';
    }
    public function deleteProductInCart()
    {
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
        return header("location: ?action=viewCart");
    }
}
