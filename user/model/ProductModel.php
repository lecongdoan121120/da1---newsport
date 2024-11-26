<?php
require_once "../config/database.php";

class ProductModel
{
  private $conn;

  public function __construct()
  {
    $this->conn = connectDB();
  }
  public function getAllproduct()
  {
    $sql = "SELECT * FROM `product`";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getAllcategory()
  {
    $sql = "SELECT * FROM `category`";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public  function getProductdetail($id)
  {
    $sql = "SELECT * FROM `product` WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function loadProductcategory($id, $category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id = :category_id AND id <> :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function showProductcategory($id)
  {
    $sql = "SELECT * FROM `category` WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getProductcategory($category_id)
  {
    $sql = "SELECT * FROM `product` WHERE category_id = :category_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':category_id', $category_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function searchProduct($keyword)
  {
    $sql = "SELECT * FROM product WHERE title LIKE :keyword"; // Không để thừa hoặc thiếu dấu nháy
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR); // Gắn tham số đúng
    $stmt->execute(); // Thực thi câu lệnh
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả
  }
  public function getProducts($limit, $offset)
  {
    $query = "SELECT * FROM `product` LIMIT :limit OFFSET :offset";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getTotalProducts()
  {
    $query = "SELECT COUNT(*) as total FROM `product`";
    $stmt = $this->conn->query($query);
    return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
  }
  public function addComment($id_user, $id_product, $content_comment)
  {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_comment = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comment (id_user, id_product, content_comment, date_comment) VALUES (:id_user, :id_product, :content_comment, :date_comment)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':id_product', $id_product);
    $stmt->bindParam(':content_comment', $content_comment);
    $stmt->bindParam(':date_comment', $date_comment);
    return $stmt->execute();
  }
  public function getCommentsByProduct($id_product)
  {
    $stmt = $this->conn->prepare("SELECT * FROM comment WHERE id_product = ? ORDER BY date_comment   DESC");
    $stmt->execute([$id_product]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
