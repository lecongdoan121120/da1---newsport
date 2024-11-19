<?php
class cartmodel
{
    private $cart;

    function __construct()
    {
       

        // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = []; // Khởi tạo giỏ hàng nếu chưa có
        }

        // Assign the cart session variable to the class property
        $this->cart = $_SESSION['cart']; // Gán giỏ hàng trong session vào thuộc tính của lớp 
    }


    function addtocart($id, $title, $price, $quantity)
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
        $_SESSION['cart'] = $this->cart; // Cập nhật lại session
   
    }

    function getcart()
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
    
}
