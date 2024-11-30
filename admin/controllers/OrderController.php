<?php 
class OrderController
{
    private $model;

    public function __construct()
    {
        $this->model = new OrderModel();
    
    }
    public function listOrders()
    {
        $orders = $this->model->getAllOrders();

        // Xử lý khi form được submit
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'], $_POST['status'])) {
            $order_id = (int)$_POST['order_id'];
            $status = $_POST['status'];

            $this->model->updateOrderStatus($order_id, $status);

            // Redirect lại trang hiện tại để làm mới
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit;
        }

        include 'views/sidebar.php';
        include 'views/OrderAdmin/listorder.php';
    }


    public function showOderdetail($orderid)
    {
       
        $orderDetails = $this->model->getOrderDetailsByOrderId($orderid);
        include 'views/sidebar.php';
        include 'views/OrderAdmin/orderdetail.php';
       
    }
}