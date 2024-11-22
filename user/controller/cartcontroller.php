<?php
require_once 'model/cartmodel.php';

class CartController
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = ($_POST['id']);
            $title = ($_POST['title']);
            $price = ($_POST['price']);
            $quantity = ($_POST['quantity']);
            $this->cartModel->addToCart($id, $title, $price, $quantity);


            $uri = $_SESSION['URI'];

            header('Location:' . $uri);
        }
    }


    // Hiển thị giỏ hàng
    public function viewCart()
    {
        $cart = $this->cartModel->getCart(); // Lấy giỏ hàng
    
        // Kiểm tra dữ liệu
        var_dump($cart); // Debug để kiểm tra giỏ hàng


        // Gọi các view
        include 'view/header.php';
        include 'view/cartview.php';
        include 'view/footer.php';
    }
}
