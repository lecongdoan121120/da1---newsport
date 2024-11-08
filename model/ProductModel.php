<?php
include 'model/database.php';
class ProductModel
{
  public $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }
  function getAllproduct()
  {
    $sql = "SELECT * FROM `product`";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function getAllcategory()
  {
    $sql = "SELECT * FROM `category`";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductdetail($id)
  {
    $sql = "SELECT * FROM `product` WHERE id='$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function updateView($id)
  {
    $sql = "UPDATE `product` SET view = view + 1  WHERE id = '$id'";
    $this->conn->query($sql);
  }
  function loadProductview()
  {
    $sql = "SELECT * FROM `product` WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function loadProductcategory($id, $category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id='$category_id' AND id <> '$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function showProductcategory($id)
  {
    $sql = "SELECT * FROM `category` WHERE id='$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductcategory($category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id='$category_id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  function searchProduct($keyword)
  {
    $sql = "SELECT * FROM `product` WHERE title LIKE :keyword";
    $stmt = $this->conn->prepare($sql); // Chuẩn bị câu lệnh SQL
    $stmt->bindValue(':keyword', '%' . $keyword . '%'); // Gán giá trị có chứa dấu '%' cho từ khóa
    $stmt->execute(); // Thực thi câu truy vấn
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về tất cả các kết quả
  }
}
