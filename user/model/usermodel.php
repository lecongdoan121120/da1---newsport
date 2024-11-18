<?php
require_once "../config/database.php";

class userModel
{
    private $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function register($fullname, $email, $phone_number, $password)
    {
        $sql = "INSERT INTO `user`(`fullname`, `email`, `phone_number`, `password`) VALUES (:fullname, :email, :phone_number, :password)";
        $stmt = $this->conn->prepare($sql);

        // Bind đúng các tham số
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
    function check($fullname, $email, $phone_number)
    {
        $sql = "SELECT COUNT(*) FROM user WHERE email = :email AND fullname = :fullname AND phone_number = :phone_number";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
        return $stmt->fetchColumn() > 0; // Trả về true nếu có bản ghi khớp với các điều kiện
    }
}
