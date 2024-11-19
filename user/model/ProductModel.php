<?php
require_once "../config/database.php";

class ProductModel
{
  private $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }

  // Lấy tất cả sản phẩm từ cơ sở dữ liệu
  function getAllproduct()
  {
    $sql = "SELECT * FROM `product`";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy tất cả danh mục từ cơ sở dữ liệu
  function getAllcategory()
  {
    $sql = "SELECT * FROM `category`";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy sản phẩm theo ID
  function getProductdetail($id)
  {
    $sql = "SELECT * FROM `product` WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Cập nhật lượt xem của sản phẩm
  function updateView($id)
  {
    $sql = "UPDATE `product` SET view = view + 1 WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
  }

  // Lấy sản phẩm theo lượt xem giảm dần
  function loadProductview()
  {
    $sql = "SELECT * FROM `product` WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy sản phẩm theo danh mục, ngoại trừ sản phẩm hiện tại
  function loadProductcategory($id, $category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id = :category_id AND id <> :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy danh mục theo ID
  function showProductcategory($id)
  {
    $sql = "SELECT * FROM `category` WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy sản phẩm theo ID danh mục
  function getProductcategory($category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id = :category_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Tìm kiếm sản phẩm theo từ khóa
  function searchProduct($keyword)
  {
    $sql = "SELECT * FROM `product` WHERE title  :keyword";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);  // Gán từ khóa
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Trả về kết quả tìm kiếm
  }
}
