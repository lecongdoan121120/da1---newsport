<?php
require_once "../config/database.php";

class oderModel {
    private $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }
    public function createOrder($data)
    {
        $sql = "INSERT INTO oders (user_id, fullname, email, phone_number, adress, note, oders_date, status, total_money)
            VALUES (:user_id, :fullname, :email, :phone_number, :adress, :note, :oders_date, :status, :total_money)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $this->conn->lastInsertId();
    }

    public function createOrderDetail($data)
    {
        $sql = "INSERT INTO oders_detail (oders_id, product_name, price, quantity )
            VALUES (:order_id, :product_name, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }


    // Lấy thông tin hóa đơn cụ thể
    public function getByUserId($user_id)
    {
        $sql = "SELECT * FROM oders WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user' => $user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Lấy chi tiết sản phẩm trong hóa đơn
    public function getOrderById($userId)
    {
        $sql = "SELECT id, order_date AS oders_date, status, total_money 
            FROM orders 
            WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    public function getOrderDetailsByOrderId($orderId)
    {
        // Truy vấn lấy chi tiết đơn hàng
        $sql = "SELECT * FROM order_details WHERE order_id = :order_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['order_id' => $orderId]);

        // Trả về mảng chi tiết sản phẩm
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}