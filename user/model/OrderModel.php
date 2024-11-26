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
    public function createOrderDetail($oders_id, $product_name, $price, $quantity)
    {
        $sql = "INSERT INTO oders_detail (oders_id, product_name, price, quantity) VALUES (:oders_id, :product_name, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':oders_id', $oders_id);
        $stmt->bindParam(':product_name', $product_name);
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
    public function getOrderDetailsByOrderId($orderid)
    {
        $sql = "SELECT * FROM oders_detail WHERE oders_id = :oders_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':oders_id', $orderid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
