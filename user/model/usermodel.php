<?php
require_once "../config/database.php";

class userModel
{
    private $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    public function register($email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashedPassword);
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
    public function getUserByEmail($email)
    {
        // Câu lệnh SQL để lấy thông tin người dùng từ bảng 'user' theo email
        $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";

        // Chuẩn bị câu lệnh SQL
        $stmt = $this->conn->prepare($sql);

        // Gắn giá trị cho tham số email trong câu lệnh SQL
        $stmt->bindParam(":email", $email);

        // Thực thi câu lệnh SQL
        $stmt->execute();

        // Lấy kết quả truy vấn và trả về dưới dạng mảng kết hợp
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra nếu không có dữ liệu, trả về false
        if ($result) {
            return $result; // Trả về mảng chứa email và password
        } else {
            return false; // Không tìm thấy user
        }
    }




}
