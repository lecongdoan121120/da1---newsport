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
        $id = ($_POST['id']);
        $title = ($_POST['title']);
        $price = ($_POST['price']);
        $quantity = ($_POST['quantity']);
        $this->cartModel->addToCart($id, $title, $price, $quantity);
        header('Location: index.php?action=viewCart');
    }

    // Hiển thị giỏ hàng
    public function viewCart()
    {
        $cart = $this->cartModel->getCart();
        include 'view/cartview.php';
    }
}
