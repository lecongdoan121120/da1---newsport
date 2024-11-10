<?php
include(__DIR__ . '/../model/categoryModel.php');



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
}
