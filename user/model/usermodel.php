<?php
require_once "../config/database.php";

class UserModel
{
    private $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    public function register($fullname, $phone_number, $email, $password)
    {
        $sql = "INSERT INTO user (fullname,email,phone_number, password) VALUES (:fullname,:phone_number, :email, :password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":fullname", $fullname);
        $stmt->bindParam(":phone_number", $phone_number);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        return $stmt->execute();
    }
    public function check($fullname, $email, $phone_number)
    {
        $sql = "SELECT COUNT(*) FROM user WHERE email = :email AND fullname = :fullname AND phone_number = :phone_number";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function update($id, $fullname, $phone_number, $adress)
    {
        $sql = "UPDATE user SET fullname = :fullname, phone_number = :phone_number, adress = :adress WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
