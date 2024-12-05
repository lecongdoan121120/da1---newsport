<?php
require_once "../config/database.php";
class OrderModel
{
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function createOrder($user_id, $fullname, $email, $phone_number, $adress, $note, $oders_date, $status, $total_money)
    {
        $sql = "INSERT INTO oders (user_id, fullname, email, phone_number, adress, note, oders_date, status, total_money) VALUES (:user_id, :fullname, :email, :phone_number, :adress, :note, :oders_date, :status, :total_money)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':note', $note);
        $stmt->bindParam(':oders_date', $oders_date);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':total_money', $total_money);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function createOrderDetail($oders_id, $product_id ,  $price, $quantity)
    {
        $sql = "INSERT INTO oders_detail (oders_id, product_id,  price, quantity) VALUES (:oders_id, :product_id, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':oders_id', $oders_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->execute();
    }
    public function getByUserId($user_id)
    {
        $sql = "SELECT * FROM oders WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    
