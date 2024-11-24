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
    $sql = "SELECT * FROM product WHERE title LIKE :keyword"; // Không để thừa hoặc thiếu dấu nháy
    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR); // Gắn tham số đúng
    $stmt->execute(); // Thực thi câu lệnh
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả
  }

  // Lấy danh sách sản phẩm với phân trang
  public function getProducts($limit, $offset)
  {
    $query = "SELECT * FROM `product` LIMIT :limit OFFSET :offset";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Lấy tổng số sản phẩm
  public function getTotalProducts()
  {
    $query = "SELECT COUNT(*) as total FROM `product`";
    $stmt = $this->conn->query($query);
    return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
  }

  // Thêm bình luận mới
  public function addComment($id_user, $id_product, $content_comment)
  {
    // Lấy thời gian hiện tại
    $date_comment = date('Y-m-d H:i:s');

    // Câu truy vấn chèn bình luận
    $sql = "INSERT INTO comment (id_user, id_product, content_comment, date_comment) 
            VALUES (:id_user, :id_product, :content_comment, :date_comment)";

    // Chuẩn bị truy vấn
    $stmt = $this->conn->prepare($sql);

    // Bind các tham số vào câu truy vấn
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':id_product', $id_product);
    $stmt->bindParam(':content_comment', $content_comment);
    $stmt->bindParam(':date_comment', $date_comment); // Đảm bảo rằng bind cho date_comment
    
    // Thực thi câu truy vấn
    return $stmt->execute(); // Chạy truy vấn
  }
  public function getCommentsByProduct($id_product)
  {
    $stmt = $this->conn->prepare("SELECT * FROM comment WHERE id_product = ? ORDER BY date_comment   DESC");
    $stmt->execute([$id_product]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
