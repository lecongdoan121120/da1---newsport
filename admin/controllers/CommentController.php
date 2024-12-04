<?php

class CommentController
{
    private $model;

    public function __construct()
    {
        $this->model = new CommentModel();
    }
    public function getcomment()
    {
     
        $comments = $this->model->getAllComments();
        include 'views/sidebar.php';
        include 'views/CommentAdmin/comment.php';
    }
    public function delete($id)
    {  
        $this->model->deleteComment($id);
        header('Location: ?action=comment'); 
    }
}
