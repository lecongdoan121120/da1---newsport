<?php
include "../config/database.php";

class categorytModel
{
  public $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }
  function addCategory($name)
  {
    // Sử dụng prepare() để chuẩn bị câu lệnh SQL an toàn hơn
    $sql = "INSERT INTO `category`(`name`) VALUES (:name)";
    $stmt = $this->conn->prepare($sql);

    // Gán giá trị cho placeholder `:name`
    $stmt->bindParam(':name', $name);

    // Thực thi truy vấn và trả về kết quả
    return $stmt->execute();
  }


}

