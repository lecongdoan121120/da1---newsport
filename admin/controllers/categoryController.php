<?php
include './model/categoryModel.php';

class categoryController
{
    public $categorymodel;

    function __construct()
    {
        $this->categorymodel = new categorytModel();
    }


    function home()
    {
        include "./view/home.php";                      
    }
    function addCategory()
    {
        if (isset($_POST['themdanhmuc']) && $_POST['themdanhmuc']) {
            $name = $_POST['name'];
            $themdanhmuc = $_POST['themdanhmuc'];
            if ($this->categorymodel->addCategory($name)) {
                echo "Danh mục đã được thêm thành công!";
            } else {
                echo "Có lỗi xảy ra. Vui lòng thử lại.";
            }
        }
        include './view/add-category.php';
    }
}
