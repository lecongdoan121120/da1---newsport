<?php
require_once 'model/odermodel.php';

class CheckoutController
{
    private $odermodel;

    public function __construct()
    {
        $this->odermodel = new oderModel();
    }

    public function checkout()
    {
        $user = $_SESSION['user'];
        $cart = $_SESSION['cart'] ?? [];
        include 'view/checkout.php';
    }


    public function processPayment()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        if (empty($_SESSION['cart'])) {
            echo "Giỏ hàng của bạn đang trống!";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_SESSION['user']['id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $adress = $_POST['adress'];
            $note = $_POST['note'] ?? '';

            $total_money = array_reduce($_SESSION['cart'], function ($sum, $item) {
                return $sum + $item['price'] * $item['quantity'];
            }, 0);

            $orderData = [
                'user_id' => $user_id,
                'fullname' => $fullname,
                'email' => $email,
                'phone_number' => $phone_number,
                'adress' => $adress,
                'note' => $note,
                'oders_date' => date('Y-m-d H:i:s'),
                'status' => 'pending',
                'total_money' => $total_money
            ];

            $order_id = $this->odermodel->createOrder($orderData);

            foreach ($_SESSION['cart'] as $item) {
                $orderDetailData = [
                    'order_id' => $order_id,
                    'product_name' => $item['title'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],

                ];
                $this->odermodel->createOrderDetail($orderDetailData);
            }

            unset($_SESSION['cart']);
            header("Location: view/oders.php");
            exit;
        }
    }

    public function listoder()
    {
        // Khởi tạo session nếu chưa được khởi tạo


        // Kiểm tra nếu 'user_id' đã được lưu trong session
        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user'];

            // Lấy danh sách đơn hàng của người dùng từ model
            $orders = $this->odermodel->getOrderById($userId);

            // Truyền biến orders vào view
            include 'view/oders.php';
        } else {
            // Nếu không có user_id trong session, có thể chuyển hướng hoặc thông báo lỗi
            echo "Bạn cần đăng nhập để xem đơn hàng.";
        }
    }

    public function show($id)
    {
        // Lấy thông tin đơn hàng
        $order = $this->odermodel->getOrderById($id);

        // Lấy thông tin chi tiết đơn hàng
        $orderDetails = $this->odermodel->getOrderDetailsByOrderId($id);

        // Truyền cả order và orderDetails vào view
        include 'view/odersdetail.php'; // Giả sử view của bạn là odersdetail.php
    }
}
