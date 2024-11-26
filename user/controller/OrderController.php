<?php
require_once 'model/OrderModel.php';
require_once 'model/ProductModel.php'; 
class OrderController
{
    private $OrderModel;

    public function __construct()
    {
        $this->OrderModel = new OrderModel();
    }
    public function checkout()
    {
        $category =(new ProductModel)->getAllcategory();
        if (!isset($_SESSION['user'])) {
            include "view/header.php";
            include "view/User/login.php";
            include "view/footer.php";  
            exit;
        }

        if (empty($_SESSION['cart'])) {
            echo "Giỏ hàng của bạn đang trống!";
            return;
        }
        include "view/header.php";
        include 'view/Order/checkout.php';
        include "view/footer.php";
    }
    public function pay()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_SESSION['user']['id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $adress = $_POST['adress'];
            $note = $_POST['note'] ?? '';
            $total_money = array_reduce(
                $_SESSION['cart'],
                function ($sum, $item) {
                    return $sum + $item['price'] * $item['quantity'];
                },
                0
            );
            date_default_timezone_set('Asia/Ho_Chi_Minh'); // Thiết lập múi giờ Việt Nam
            $orders_date = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại theo định dạng
            $status = 'pending';

            // Tạo đơn hàng trong cơ sở dữ liệu
            $order_id = $this->OrderModel->CreateOrder(
                $user_id,
                $fullname,
                $email,
                $phone_number,
                $adress,
                $note,
                $orders_date,
                $status,
                $total_money
            );

            foreach ($_SESSION['cart'] as $item) {
                $this->OrderModel->CreateOrderDetail(
                    $order_id,
                    $item['title'],      // Tên sản phẩm
                    $item['price'],      // Giá sản phẩm
                    $item['quantity']    // Số lượng sản phẩm
                );
            }

            // Xóa giỏ hàng và đặt lại total
            unset($_SESSION['cart']); // Xóa giỏ hàng
            $_SESSION['total'] = 0;   // Đặt total về 0
        }

        // Chuyển đến trang thông báo thành công
        include 'view/Order/paysucess.php';
    }


    public function listoder()
    {
        $category = (new ProductModel)->getAllcategory();
        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user']['id'];
            $orders = $this->OrderModel->getByUserId($userId);
            include "view/header.php";
            include 'view/Order/listoders.php';
            include "view/footer.php";
        } else {
            echo "Bạn cần đăng nhập để xem đơn hàng.";
        }
    }
    public function showOderdetail($orderid)
    {
        $category = (new ProductModel)->getAllcategory();
        $user_id = $_SESSION['user']['id']; 
        $orderDetails = $this->OrderModel->getOrderDetailsByOrderId($orderid);
        include "view/header.php";
        include 'view/Order/odersdetail.php';
        include "view/footer.php";
    }
}
