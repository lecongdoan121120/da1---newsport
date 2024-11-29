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
        $sql  = "SELECT * FROM comment ORDER BY date_comment DESC";
        $stmt = $this->conn->prepare($sql);
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
