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
    public function getOrderById($orderid)
    {
        $query = "SELECT * FROM oders WHERE id = :orderid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':orderid', $orderid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrderDetailsByOrderId($orderId)
    {
        $sql = "
        SELECT 
            oders_detail.id, 
            oders_detail.quantity, 
             oders_detail.price, 
            product.title AS product_name, 
            product.thumbnail AS product_thumbnail
        FROM 
            oders_detail
        JOIN 
            product
        ON 
            oders_detail.product_id = product.id
        WHERE 
            oders_detail.oders_id = :oders_id
    ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':oders_id', $orderId, PDO::PARAM_INT);
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
