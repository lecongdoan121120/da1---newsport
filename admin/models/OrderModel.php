<?php
class OrderModel

{
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllOrders()
    {
        $sql = "SELECT * FROM oders ORDER BY oders_date DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOrderDetailsByOrderId($orderid)
    {
        $sql = "SELECT * FROM oders_detail WHERE oders_id = :oders_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':oders_id', $orderid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateOrderStatus($id, $status)
    {
        $sql = "UPDATE oders SET status = :status WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}