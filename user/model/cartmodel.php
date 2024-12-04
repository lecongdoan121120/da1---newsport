<?php
class CartModel
{
    private $cart;
    public function __construct()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->cart = $_SESSION['cart'];

        $_SESSION['total'] = $this->getTotalQuantity();
    }

    public function addtocart($id, $title, $thumbnail, $price, $quantity)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity'] += $quantity;
        } else {
            $this->cart[$id] = [
                'title' => $title,
                'thumbnail' => $thumbnail,
                'price' => $price,
                'quantity' => $quantity,
            ];
        }
        $_SESSION['cart'] = $this->cart;
    }
    public function getcart()
    {
        return $this->cart;
    }
    public function getTotalPrice()
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }


    public function getTotalQuantity()
    {
        $carts = $_SESSION['cart'] ?? [];
        $totalQuantity = 0;

        foreach ($carts as $cart) {
            $totalQuantity += $cart['quantity'];
        }
        return $totalQuantity;
    }

    public function updateCartQuantities($quantities)
    {
        foreach ($quantities as $id => $qty) {
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] = $qty;
            }
        }
    }
}
