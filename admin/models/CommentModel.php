<?php
class CommentModel
{
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllComments()
    {
      
        $stmt = $this->conn->prepare("
        SELECT 
            comment.*, 
            user.fullname,
            product.title AS title
        FROM 
            comment 
        JOIN 
            user ON comment.id_user = user.id 
        JOIN 
            product ON comment.id_product = product.id
        ORDER BY 
            comment.date_comment DESC
    ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteComment($id)
    {
        $sql = "DELETE FROM comment WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
