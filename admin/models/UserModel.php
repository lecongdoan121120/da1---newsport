<?php
class UserModel
{
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAll()
    {
        $sql = "SELECT id, fullname, email, phone_number, role, adress FROM `user`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($fullname, $email, $phone_number, $password, $role, $adress)
    {
        $sql = "INSERT INTO user (fullname, email, phone_number, password, role, adress)  VALUES (:fullname, :email, :phone_number, :password, :role, :adress)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':fullname', $fullname);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':phone_number', $phone_number);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':role', $role);
        $stmt->bindValue(':adress', $adress);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function updateUser($id, $fullname, $email, $phone_number, $password, $role, $adress)
    {
        $sql = "UPDATE user SET fullname = :fullname, email = :email, phone_number = :phone_number, 
            password = :password, role = :role, adress = :adress WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':id', $id);
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
