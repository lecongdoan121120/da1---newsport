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

    public function addtocart($id, $title, $price, $quantity)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity'] += $quantity;
        } else {
            $this->cart[$id] = [
                'title' => $title,
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
        $carts = $_SESSION['cart'] ?? []; // Lấy giỏ hàng từ session
        $totalQuantity = 0;

        foreach ($carts as $cart) {
            $totalQuantity += $cart['quantity']; // Cộng dồn số lượng
        }
        return $totalQuantity;
    }

    public function updateCartQuantities($quantities)
    {
        // Lặp qua các sản phẩm và cập nhật số lượng trong giỏ hàng
        foreach ($quantities as $id => $qty) {
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] = $qty;
            }
        }
    }
    
}
