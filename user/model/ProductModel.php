<?php
include "../config/database.php"; 
class ProductModel
{
  public $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }
  // Lấy sản phẩm từ cơ sở dữ liệu
  function getAllproduct()
  {
    $sql = "SELECT * FROM `product`";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Lấy danh mục từ cơ sở dữ liệu
  function getAllcategory()
  {
    $sql = "SELECT * FROM `category`";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Lấy sản phẩm theo ID
  function getProductdetail($id)
  {
    $sql = "SELECT * FROM `product` WHERE id='$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Hàm hiển thị lượt xem của sản phẩm
  function updateView($id)
  {
    $sql = "UPDATE `product` SET view = view + 1  WHERE id = '$id'";
    $this->conn->query($sql);
  }
  // Hàm hiển thị sản phẩm theo số lượt xem và giảm dần theo thứ tự
  function loadProductview()
  {
    $sql = "SELECT * FROM `product` WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Hàm hiển thị sản phẩm theo id danh mục 
  function loadProductcategory($id, $category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id='$category_id' AND id <> '$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Hàm hiển thị danh mục theo id giúp hiển thị trang product-category và hiển thị đúng sản phẩm theo category_ids
  function showProductcategory($id)
  {
    $sql = "SELECT * FROM `category` WHERE id='$id'";
    $result = $this->conn->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  // Hàm giúp hiển thị sản phẩm trong trang product-category được lấy theo id danh mục
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
